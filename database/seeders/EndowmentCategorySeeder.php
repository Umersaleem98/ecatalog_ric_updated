<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EndowmentCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EndowmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'Support a Degree for 1 Year', 'description' => 'Funding for one year of a degree program'],
            ['name' => 'Support the Entire Degree Program', 'description' => 'Funding for the entire duration of a degree program'],
            ['name' => 'Create a Perpetual Seat in Your Name', 'description' => 'Perpetual funding for a named seat'],
            ['name' => 'Zakat for Students', 'description' => 'Zakat donations for students'],
        ];

        foreach ($categories as $category) {
            EndowmentCategory::create($category);
        }
    }
}
