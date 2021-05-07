<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TemplateDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'Kullanıcı',
                'display_name_plural' => 'Kullanıcılar',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menü',
                'display_name_plural' => 'Menüler',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Rol',
                'display_name_plural' => 'Roller',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-05-06 23:05:37',
                'updated_at' => '2021-05-06 23:05:37',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'bilets',
                'slug' => 'bilets',
                'display_name_singular' => 'Bilet',
                'display_name_plural' => 'Bilets',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Bilet',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-05-06 23:07:45',
                'updated_at' => '2021-05-06 23:07:45',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'film_turus',
                'slug' => 'film-turus',
                'display_name_singular' => 'Film Turu',
                'display_name_plural' => 'Film Turus',
                'icon' => NULL,
                'model_name' => 'App\\Models\\FilmTuru',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-05-06 23:08:07',
                'updated_at' => '2021-05-06 23:08:07',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'films',
                'slug' => 'films',
                'display_name_singular' => 'Film',
                'display_name_plural' => 'Films',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Film',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-05-06 23:08:45',
                'updated_at' => '2021-05-07 00:27:17',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'koltuks',
                'slug' => 'koltuks',
                'display_name_singular' => 'Koltuk',
                'display_name_plural' => 'Koltuks',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Koltuk',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-05-06 23:09:09',
                'updated_at' => '2021-05-07 00:33:04',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'salons',
                'slug' => 'salons',
                'display_name_singular' => 'Salon',
                'display_name_plural' => 'Salons',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Salon',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-05-06 23:11:06',
                'updated_at' => '2021-05-06 23:11:06',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'seans',
                'slug' => 'seans',
                'display_name_singular' => 'Seans',
                'display_name_plural' => 'Seans',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Seans',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-05-06 23:12:09',
                'updated_at' => '2021-05-07 00:31:20',
            ),
        ));
        
        
    }
}