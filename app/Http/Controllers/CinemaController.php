<?php

namespace App\Http\Controllers;

use App\Models\Bilet;
use App\Models\Film;
use App\Models\Koltuk;
use App\Models\Salon;
use App\Models\Seans;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CinemaController extends Controller
{
    public function mobile()
    {
        return view('mobile.home');
    }

    public function detail($filmId)
    {
        $film = Film::query()
            ->findOrFail($filmId);
        return view('mobile.detail', ['film' => $film]);
    }

    public function home()
    {
        return view('home',[
            'tarihVal'    => null,
            'filmVal'     => null,
            'saatVal'     => null,
            'salonVal'    => null,
            'koltukVal'  => null,
            'section2' => null,
            'section3' => null,
            'section4' => null,
            'saleReady'  => null,
            'route' => route('bilet-al-adim-1'),
        ]);
    }

    public function ticketDetail($t)
    {
        [$seans,$koltuk] = explode('-',$t);
        $bilet = Bilet::query()
            ->where('seans_id',$seans)
            ->where('koltuk_id',$koltuk)
            ->firstOrFail();
        $film = \App\Models\Film::query()->find(Seans::query()->find($seans)->film_id);
        return view('ticket_detail',['bilet' => $bilet,'film' => $film]);
    }

    public function purchase(Request $request)
    {
        $date  = Carbon::createFromFormat('d/m/Y H:i', str_replace('.', '/', $request->tarih.' '.$request->saat));
        $seans = Seans::query()
            ->where('tarih_saat', $date)
            ->where('film_id', $request->film)
            ->where('salon_id',$request->salon)
            ->firstOrFail();
        $bilet = new Bilet();
        $bilet->seans_id = $seans->id;
        $bilet->koltuk_id = $request->koltuk;
        $bilet->satis_tarihi = now();
        $bilet->musteri_bilgileri = ['adi' => $request->adi, 'tel' => $request->tel];
        $bilet->save();
        return Redirect::route('bilet-detayi',['biletNo' => $seans->id .'-'.$request->koltuk]);
    }

    public function mobileBuyFilm(Request $request,$filmId)
    {
        return Self::stepper($request,false,false,false,false,'mobile.buy', $filmId);
    }

    public static function stepper(Request $request, $section2 = null, $section3 = null, $section4 = null, $section5 = null, $viewName = 'bilet_adim',$filmId = null)
    {
        $tarih  = null;
        $saat   = null;
        $film   = null;
        $salon  = null;
        $koltuk = null;


        if ($request->tarih) {
            $tarih = $request->tarih;
        }

        if ($request->saat) {
            $saat = $request->saat;
        }

        if ($request->film) {
            $film = $request->film;
        }

        if ($request->salon) {
            $salon = $request->salon;
        }

        if ($request->koltuk) {
            $koltuk = $request->koltuk;
        }

        if ($section2 === true) {
            $date  = Carbon::createFromFormat('d/m/Y', str_replace('.', '/', $tarih))
                ->startOfDay();
            $seans = Seans::query()
                ->where('tarih_saat', '>', $date)
                ->where('tarih_saat', '<', $date->toImmutable()
                    ->endOfDay())
                ->where('film_id', $film)->get();
            $times = [];
            $seans->each(function ($s) use(&$times){
                $times[] = Carbon::createFromTimestamp($s->tarih_saat->timestamp)->format('H:i');
            });

        }
        if($section3 === true){
            $date  = Carbon::createFromFormat('d/m/Y H:i', str_replace('.', '/', $tarih.' '.$saat));
            $salonIds = [];
            $seans = Seans::query()
                ->where('tarih_saat', $date)
                ->where('film_id', $film)->get();
            $seans->each(function($s) use(&$salonIds){
                $salonIds[] = $s->salon_id;
            });
            $salons = Salon::query()->findMany($salonIds);
        }

        if($section4 === true){
            $date  = Carbon::createFromFormat('d/m/Y H:i', str_replace('.', '/', $tarih.' '.$saat));
            $seans = Seans::query()
                ->where('tarih_saat', $date)
                ->where('film_id', $film)
                ->where('salon_id',$salon)
                ->firstOrFail();
            $koltukIds = Koltuk::query()
                ->where('salon_id',$salon)
                ->pluck('id')->toArray();
            $soldTickets = Bilet::query()
                ->where('seans_id',$seans->id)
                ->pluck('koltuk_id')->toArray();
            $available_tickets = array_diff($koltukIds,$soldTickets);
            $koltuks = Koltuk::query()->findMany($available_tickets);
        }
        $saleReady = null;
        $route = route('bilet-al-adim-2');
        if($saat  && $saat !== 'null'){
            $route = route('bilet-al-adim-3');
        }
        if($salon  && $salon !== 'null'){
            $route = route('bilet-al-adim-4');
        }
        if($koltuk && $koltuk !== 'null'){
            $route = route('satin-alma');
            $saleReady = true;
        }

        if($filmId !== null){
            return view($viewName, [
                'tarihVal'  => $tarih,
                'saatVal'   => $saat,
                'filmVal'   => $film,
                'salonVal'  => $salon,
                'koltukVal' => $koltuk,
                'section2'  => $section2,
                'section3'  => $section3,
                'section4'  => $section4,
                'section5'  => $section5,
                'saleReady'  => $saleReady,
                'times' => isset($times) ? $times : [],
                'salons' => isset($salons) ? $salons : [],
                'koltuks' => isset($koltuks) ? $koltuks : [],
                'route' => $route,
                'film' => Film::query()->find($filmId),
            ]);
        }

        return view($viewName, [
            'tarihVal'  => $tarih,
            'saatVal'   => $saat,
            'filmVal'   => $film,
            'salonVal'  => $salon,
            'koltukVal' => $koltuk,
            'section2'  => $section2,
            'section3'  => $section3,
            'section4'  => $section4,
            'section5'  => $section5,
            'saleReady'  => $saleReady,
            'times' => isset($times) ? $times : [],
            'salons' => isset($salons) ? $salons : [],
            'koltuks' => isset($koltuks) ? $koltuks : [],
            'route' => $route,
        ]);
    }
}
