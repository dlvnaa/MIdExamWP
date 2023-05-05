<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'level_id' => 1,
                'name' => 'Mr. Vico Lomar',
            ], [
                'level_id' => 2,
                'name' => 'Ms. Fei Fei Li',
            ],
        ];

        DB::table('users')->insert($data);
    }
}
