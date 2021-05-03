<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

         //Define data
        $roles = [
             ['role'=>'admin'],
             ['role'=>'member'],
             ['role'=>'affiliate'],

        ];
         //Insert data in the table
         foreach ($roles as $data) {
             DB::table('roles')->insert([
                 'role' => $data['role'],
             ]);
        }
    }
}
