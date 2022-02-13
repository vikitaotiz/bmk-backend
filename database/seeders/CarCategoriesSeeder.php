<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_categories')->insert([
            'name' => 'Medium Car',
            'created_at' => now(),            
            'updated_at' => now()
        ]);
        DB::table('car_categories')->insert([
            'name' => 'Small Car',
            'created_at' => now(),            
            'updated_at' => now()
        ]);
        DB::table('car_categories')->insert([
            'name' => 'Big Car',
            'created_at' => now(),            
            'updated_at' => now()
        ]);
    }
}
