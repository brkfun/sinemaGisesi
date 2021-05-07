<?php

namespace Database\Seeders;

use App\Models\FilmTuru;
use Illuminate\Database\Seeder;

class FilmTuruSeeder extends Seeder
{

    protected $turler = ['komedi','aksiyon, macera','korku, gerilim','romantik','bilim kurgu'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->turler as $tur) {
            $film_turu = new FilmTuru();
            $film_turu->adi = $tur;
            $film_turu->save();
        }
    }
}
