<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            'name' => 'Hotel One',
            'description' => 'Hotel One Description',
            'property_category_id' => 1,
            'country_id' => 1,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('properties')->insert([
            'name' => 'Hotel Two',
            'description' => 'Hotel Two Description',
            'property_category_id' => 1,
            'country_id' => 2,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('properties')->insert([
            'name' => 'Hotel Three',
            'description' => 'Hotel Three Description',
            'property_category_id' => 2,
            'country_id' => 1,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('properties')->insert([
            'name' => 'Hotel Four',
            'description' => 'Hotel Four Description',
            'property_category_id' => 3,
            'country_id' => 3,
            'created_at' => now(),            
            'updated_at' => now()
        ]);
    }
}