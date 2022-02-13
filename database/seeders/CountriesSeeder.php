<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'Kenya',
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('countries')->insert([
            'name' => 'Uganda',
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('countries')->insert([
            'name' => 'Tanazania',
            'created_at' => now(),            
            'updated_at' => now()
        ]);
    }
}
