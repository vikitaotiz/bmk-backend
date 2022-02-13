<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // Add admin role
        DB::table('roles')->insert([
            'name' => 'Admin',
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        // Enter default admin
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin#2020'),
            'role_id' => 1,
            'created_at' => now(),            
            'updated_at' => now()
        ]);
        
        // add roles
        DB::table('roles')->insert([
            'name' => 'Customer',
            'created_at' => now(),            
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'Traveller',
            'created_at' => now(),            
            'updated_at' => now()
        ]);
    }
}
