<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Nairobi',
            'country_id' => 1,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Kisumu',
            'country_id' => 1,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Kampala',
            'country_id' => 2,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Dodoma',
            'country_id' => 3,
            'created_at' => now(),            
            'updated_at' => now()
        ]);
    }
}
