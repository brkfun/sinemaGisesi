<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function mobile()
    {
        return view('mobile.home');
    }

    public function detail($filmId)
    {
        $film = Film::query()->findOrFail($filmId);
        return view('mobile.detail',['film' => $film]);
    }
}
