<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    public $filmData
        = [
            ["adi"             => "kolpaçino",
             "yonetmen_adi"    => "atıl",
             "yonetmen_soyadi" => "inaç",
             "suresi"          => "135",
             "vizyon_tarihi"   => "2009-10-29",
             "film_turu_id"    => "1",
             "kod"             => "AJX3",
            ],
            ["adi"             => "gladyatör",
             "yonetmen_adi"    => "ridley",
             "yonetmen_soyadi" => "scott",
             "suresi"          => "235",
             "vizyon_tarihi"   => "2000-05-19",
             "film_turu_id"    => "2",
             "kod"             => "AJX3",
            ],
            ["adi"             => "oyun",
             "yonetmen_adi"    => "david",
             "yonetmen_soyadi" => "fincher",
             "suresi"          => "128",
             "vizyon_tarihi"   => "1998-02-06",
             "film_turu_id"    => "3",
             "kod"             => "APX1",
            ],
            ["adi"             => "ilk öpücük",
             "yonetmen_adi"    => "peter",
             "yonetmen_soyadi" => "segal",
             "suresi"          => "100",
             "vizyon_tarihi"   => "2004-04-30",
             "film_turu_id"    => "4",
             "kod"             => "CAX2",
            ],
            ["adi"             => "star wars",
             "yonetmen_adi"    => "george",
             "yonetmen_soyadi" => "lucas",
             "suresi"          => "140",
             "vizyon_tarihi"   => "2005-05-19",
             "film_turu_id"    => "5",
             "kod"             => "CRX2",
            ],
            ["adi"             => "titanic",
             "yonetmen_adi"    => "james",
             "yonetmen_soyadi" => "cameron",
             "suresi"          => "184",
             "vizyon_tarihi"   => "2012-04-06",
             "film_turu_id"    => "4",
             "kod"             => "CVX5",
            ],
            ["adi"             => "truman show",
             "yonetmen_adi"    => "peter",
             "yonetmen_soyadi" => "weir",
             "suresi"          => "103",
             "vizyon_tarihi"   => "1998-10-16",
             "film_turu_id"    => "1",
             "kod"             => "CV65",
            ],
            ["adi"             => "ölümlü dünya",
             "yonetmen_adi"    => "ali",
             "yonetmen_soyadi" => "atay",
             "suresi"          => "107",
             "vizyon_tarihi"   => "2018-01-26",
             "film_turu_id"    => "1",
             "kod"             => "CATR",
            ],
            ["adi"             => "parazit",
             "yonetmen_adi"    => "bong",
             "yonetmen_soyadi" => "joon-ho",
             "suresi"          => "132",
             "vizyon_tarihi"   => "2019-05-30",
             "film_turu_id"    => "3",
             "kod"             => "BRKF",
            ],
            ["adi"             => "fight club",
             "yonetmen_adi"    => "david",
             "yonetmen_soyadi" => "fincher",
             "suresi"          => "151",
             "vizyon_tarihi"   => "1999-12-10",
             "film_turu_id"    => "2",
             "kod"             => "VZ34",
            ],


        ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->filmData as $filmFull) {
            $film = new Film();
            foreach ($filmFull as $filmFields => $filmValues) {
                $film->$filmFields = $filmValues;
            }
            $film->resim = 'films/'.$filmFull['adi'].'.jpg';
            $film->save();
        }
    }
}
