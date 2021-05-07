<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(TemplateDataTypesTableSeeder::class);
        $this->call(TemplateDataRowsTableSeeder::class);
        $this->call(TemplateMenusTableSeeder::class);
        $this->call(TemplateMenuItemsTableSeeder::class);
        $this->call(TemplateSettingsTableSeeder::class);
        $this->call(SalonSeeder::class);
        $this->call(KoltukSeeder::class);
        $this->call(FilmTuruSeeder::class);
        $this->call(FilmSeeder::class);
        $this->call(SeansSeeder::class);

        // \App\Models\User::factory(10)->create();
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')
                ->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('admin'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }
    }
}
