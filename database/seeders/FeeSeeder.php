<?php

namespace Database\Seeders;

use App\Models\Fee;
use App\Models\Program;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeeSeeder extends Seeder
{
    public function run()
    {
        $undergraduate = Program::where('name', 'Undergraduate Students')->first();
        $postgraduate = Program::where('name', 'Postgraduate Students')->first();
        $phd = Program::where('name', 'PhD Students')->first();

        $fees = [
            ['program_id' => $undergraduate->id, 'duration' => '1 year', 'amount' => 10000.00],
            ['program_id' => $undergraduate->id, 'duration' => '4 years', 'amount' => 40000.00],
            ['program_id' => $postgraduate->id, 'duration' => '1 year', 'amount' => 20000.00],
            ['program_id' => $postgraduate->id, 'duration' => '4 years', 'amount' => 80000.00],
            ['program_id' => $phd->id, 'duration' => '1 year', 'amount' => 30000.00],
            ['program_id' => $phd->id, 'duration' => '4 years', 'amount' => 120000.00],
        ];

        foreach ($fees as $fee) {
            Fee::create($fee);
        }
    }
}
