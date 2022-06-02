<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\MortgageProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentsMortgageProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartmentsEntriesCount = Apartment::all()->count();
        $mortgageProgramsEntriesCount = MortgageProgram::all()->count();
        for ($apartment = 1; $apartment <= $apartmentsEntriesCount; $apartment++) {
            for ($mortgageProgram = 1; $mortgageProgram <= $mortgageProgramsEntriesCount; $mortgageProgram++) {
                DB::table('apartments_mortgage_programs')->insert([
                    'apartment_id' => $apartment,
                    'mortgage_program_id' => $mortgageProgram
                ]);
            }
        }
    }
}
