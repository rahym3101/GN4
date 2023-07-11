<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seasons = [
            'Summer',
            'Winter',
        ];

        foreach ($seasons as $season) {
            $obj = new season();
            $obj->name = $season;
            $obj->save();

        }
}
