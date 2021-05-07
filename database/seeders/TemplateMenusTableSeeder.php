<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TemplateMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
            ),
        ));
        
        
    }
}