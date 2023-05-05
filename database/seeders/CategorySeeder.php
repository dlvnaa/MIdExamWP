<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            //  id = 1 -> iced
            // id = 2 -> Hot
            [
                'name' => 'Iced',
            ], [
                'name' => 'Hot',
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
