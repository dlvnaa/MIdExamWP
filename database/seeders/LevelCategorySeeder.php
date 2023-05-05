<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            // Level Id = 1 -> Gold Level
            // Level Id = 2 -> Green Level
            [
                'name' => 'Gold Level',
            ], [
                'name' => 'Green Level',
            ],
        ];

        DB::table('level_categories')->insert($data);
    }
}
