<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TemplateMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Yönetim Paneli',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Medya',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Kullanıcılar',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roller',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Araçlar',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menü Oluşturucu',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 10,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Veritabanı',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 11,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Pusula',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 12,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 13,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Ayarlar',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Bilets',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 15,
                'created_at' => '2021-05-06 23:07:45',
                'updated_at' => '2021-05-06 23:07:45',
                'route' => 'voyager.bilets.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Film Turus',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 16,
                'created_at' => '2021-05-06 23:08:07',
                'updated_at' => '2021-05-06 23:08:07',
                'route' => 'voyager.film-turus.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Films',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 17,
                'created_at' => '2021-05-06 23:08:45',
                'updated_at' => '2021-05-06 23:08:45',
                'route' => 'voyager.films.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Koltuks',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 18,
                'created_at' => '2021-05-06 23:09:09',
                'updated_at' => '2021-05-06 23:09:09',
                'route' => 'voyager.koltuks.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Salons',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 19,
                'created_at' => '2021-05-06 23:11:06',
                'updated_at' => '2021-05-06 23:11:06',
                'route' => 'voyager.salons.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Seans',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 20,
                'created_at' => '2021-05-06 23:12:09',
                'updated_at' => '2021-05-06 23:12:09',
                'route' => 'voyager.seans.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}