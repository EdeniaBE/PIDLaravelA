<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        //Define data
        $users = [
            [
                'login'=>'icc',
                'firstname'=>'AG',
                'lastname'=>'Julien', 
                'langue'=>'français',
                'email'=>'ag-julien@outlook.com',
                'password'=>'admin',
                'email_verified_at' => null,
            ],
        ];

        //Insert data in the table
        foreach ($users as $data) {     
            DB::table('users')->insert([
                'login' => $data['login'],
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],   
                'langue' => $data['langue'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'email_verified_at' => $data['email_verified_at'],
            ]);
        }
    }
}