<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_categories')->insert([
            'name' => 'Big Hotel',
            'created_at' => now(),            
            'updated_at' => now()
        ]);
        DB::table('property_categories')->insert([
            'name' => 'Medium Hotel',
            'created_at' => now(),            
            'updated_at' => now()
        ]);
        DB::table('property_categories')->insert([
            'name' => 'Small Hotel',
            'created_at' => now(),            
            'updated_at' => now()
        ]);
    }
}
