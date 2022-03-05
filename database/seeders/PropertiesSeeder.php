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
            'type' => 'hotel',
            'amount' => 350.00,
            'description' => 'Hotel One Description',
            'property_category_id' => 1,
            'address_id' => 1,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('properties')->insert([
            'name' => 'Hotel Two',
            'type' => 'hotel',
            'amount' => 600.00,
            'description' => 'Hotel Two Description',
            'property_category_id' => 1,
            'address_id' => 2,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('properties')->insert([
            'name' => 'Hotel Three',
            'type' => 'hotel',
            'amount' => 580.50,
            'description' => 'Hotel Three Description',
            'property_category_id' => 2,
            'address_id' => 1,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('properties')->insert([
            'name' => 'Hotel Four',
            'type' => 'hotel',
            'amount' => 480.00,
            'description' => 'Hotel Four Description',
            'property_category_id' => 3,
            'address_id' => 3,
            'created_at' => now(),            
            'updated_at' => now()
        ]);
    }
}
