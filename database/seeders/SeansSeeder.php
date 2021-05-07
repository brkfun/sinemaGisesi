<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Salon;
use App\Models\Seans;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $before = now()
            ->subMonths(1)
            ->startOfDay();
        $after  = now()
            ->addMonths(3)
            ->startOfDay();

        $salons = Salon::all();
        $films = Film::all();

        $dates     = CarbonInterval::minutes(120)
            ->toPeriod($before, $after);
        $dateArray = [];
        foreach ($dates as $date) {
            $seans = new Seans();
            foreach ($salons as $salon) {
                $seans->kod = Str::random('8');
                $seans->salon_id = $salon->id;
                $seans->ucret = rand(20,30);
                $seans->film_id = rand(1,$films->count());
                $seans->tarih_saat = $date;
                $seans->save();
            }
        }
    }
}
