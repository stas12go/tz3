<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MortgageProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Семейная ипотека',
            'Льготная ипотека',
            'Господдержка 2022',
            'Госпрограмма для семей с детьми',
            'Ипотека для IT-специалистов'
        ];

        foreach ($names as $name) {
            DB::table('mortgage_programs')->insert([
                'name' => $name,
                'interest_rate' => rand(5, 10),
                'max_term' => 5 * rand(1, 6),
                'min_initial_fee' => 5 * rand(2, 8),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
