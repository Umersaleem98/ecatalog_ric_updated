<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        $programs = [
            ['name' => 'Undergraduate Students', 'description' => 'Programs for undergraduate students'],
            ['name' => 'Postgraduate Students', 'description' => 'Programs for postgraduate students'],
            ['name' => 'PhD Students', 'description' => 'Programs for PhD students'],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
