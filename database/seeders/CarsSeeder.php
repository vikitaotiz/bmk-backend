<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'name' => 'Car One',
            'description' => 'Car One Description',
            'car_category_id' => 3,
            'country_id' => 1,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('cars')->insert([
            'name' => 'Car Two',
            'description' => 'Car Two Description',
            'car_category_id' => 1,
            'country_id' => 3,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('cars')->insert([
            'name' => 'Car Three',
            'description' => 'Car Three Description',
            'car_category_id' => 2,
            'country_id' => 2,
            'created_at' => now(),            
            'updated_at' => now()
        ]);
    }
}
