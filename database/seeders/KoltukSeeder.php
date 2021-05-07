<?php

namespace Database\Seeders;

use App\Models\Koltuk;
use App\Models\Salon;
use Illuminate\Database\Seeder;

class KoltukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salons          = Salon::all();
        $matrixChr       = [
            'A',
            'B',
            'C',
            'D',
        ];
        $matrixMaxNumber = 10;
        foreach ($salons as $salon) {
            foreach ($matrixChr as $chr) {
                for ($a = 1; $a <= $matrixMaxNumber; $a ++) {
                    $koltuk = new Koltuk();
                    $koltuk->salon_id = $salon->id;
                    $koltuk->kod = $chr.$a;
                    $koltuk->save();
                }
            }
        }

    }
}
