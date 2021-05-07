<?php

namespace Database\Seeders;

use App\Models\Salon;
use Illuminate\Database\Seeder;

class SalonSeeder extends Seeder
{
    public $salonChr = ['A','B','C'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->salonChr as $chr) {
            $salon = new Salon();
            $salon->adi = $chr.' Salonu';
            $salon->save();
        }
    }
}
