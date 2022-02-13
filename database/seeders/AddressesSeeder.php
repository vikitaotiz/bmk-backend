<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'name' => 'Embakasi',
            'city_id' => 1,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('addresses')->insert([
            'name' => 'Manyatta',
            'city_id' => 2,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('addresses')->insert([
            'name' => 'Bujinga',
            'city_id' => 3,
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('addresses')->insert([
            'name' => 'Goma',
            'city_id' => 4,
            'created_at' => now(),            
            'updated_at' => now()
        ]);
    }
}
