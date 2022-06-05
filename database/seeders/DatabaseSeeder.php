<?php

namespace Database\Seeders;

use App\Models\Apartments;
use App\Models\MortgagePrograms;
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
         Apartments::factory(20)->create();


        $this->call([
            MortgageProgramSeeder::class,
            ApartmentsMortgageProgramSeeder::class,
        ]);
    }
}
