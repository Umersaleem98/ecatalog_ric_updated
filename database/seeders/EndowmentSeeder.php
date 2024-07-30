<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\Endowment;
use Illuminate\Database\Seeder;
use App\Models\EndowmentCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EndowmentSeeder extends Seeder
{
    public function run()
    {
        $category = EndowmentCategory::where('name', 'Support a Degree for 1 Year')->first();
        $program = Program::where('name', 'Undergraduate Students')->first();

        Endowment::create([
            'category_id' => $category->id,
            'program_id' => $program->id,
            'type' => 'single',
            'amount' => 10000.00,
        ]);
    }
}
