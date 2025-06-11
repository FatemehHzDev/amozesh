<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create(['name' => 'امور بازرگانی']);
        Course::create(['name' => 'امور کشاورزی']);
        Course::create(['name' => 'فناوری اطلاعات']);
    }
}
