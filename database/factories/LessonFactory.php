<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $season = DB::table('seasons')->inRandomOrder()->first();
        $course = DB::table('courses')->inRandomOrder()->first();
        $classroom = DB::table('classrooms')->inRandomOrder()->first();
        $teacher = DB::table('teachers')->inRandomOrder()->first();
    }
}
