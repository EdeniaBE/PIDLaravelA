<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Models\Locality;
use Illuminate\Support\Facades\Schema;

class LocalitySeeder extends Seeder
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
         Type::truncate();
         Schema::enableForeignKeyConstraints();
        
         //Define data
        $localities = [
            ['postal_code'=>'1000','locality'=>'Bruxelles'],
            ['postal_code'=>'1190','locality'=>'Forest'],
            ['postal_code'=>'1180','locality'=>'Uccle'],
            ['postal_code'=>'1030','locality'=>'Schaerbeek'],
         ];
         
         //Insert data in the table
         foreach ($localities as $data) {
            DB::table('localities')->insert([
                'postal_code' => $data['postal_code'],
                'locality' => $data['locality'],
            ]);
        }    
    }
}
