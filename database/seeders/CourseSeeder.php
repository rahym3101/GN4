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
        $courses = [
            'Computer5',
            'Computer9',
            'Computer10',
            'Beginner',
            'Elementary',
            'Pre-intermediate',
            'Internediate',
            'Upper-intermediate',
            'Advanced',
            'TOEFL',
        ];

        foreach ($courses as $course) {
            $obj = new Course();
            $obj->name = $course;
            $obj->save();
        }
}
