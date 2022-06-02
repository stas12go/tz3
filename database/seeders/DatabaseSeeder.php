<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\MortgageProgram;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         Apartment::factory(20)->create();


        $this->call([
            MortgageProgramSeeder::class,
            ApartmentsMortgageProgramSeeder::class,
        ]);
    }
}
