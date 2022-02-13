<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(AddressesSeeder::class);
        $this->call(PropertyCategoriesSeeder::class);
        $this->call(PropertiesSeeder::class);
        $this->call(CarCategoriesSeeder::class);
        $this->call(CarsSeeder::class);
    }
}
