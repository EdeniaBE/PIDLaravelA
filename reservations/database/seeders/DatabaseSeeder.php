<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ArtistSeeder::class, 
            TypeSeeder::class, 
            RoleSeeder::class, 
            LocalitySeeder::class,
            LocationSeeder::class, 
            ShowSeeder::class, 
            RepresentationSeeder::class, 
            UserSeeder::class,
            ArtistTypeSeeder::class, 
            ArtistTypeShowSeeder::class, 
            RoleUserSeeder::class, 
            RepresentationUserSeeder::class,
        ]);

    }
}
