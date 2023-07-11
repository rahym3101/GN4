<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            'A1',
            'A2',
            'A8',
            'B1',
            'B2',
            'B11',
            'D1',
            'D2',
            'D3',
            'D4',
        ]
        foreach ($classrooms as $classroom) {
            $obj = new Classroom();
            $obj->name = $classroom;
            $obj->save();
        }
    }
}
