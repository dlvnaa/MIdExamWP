<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
                'coffee_id' => 1,
                'category_id' => 1,
            ], [
                'coffee_id' => 2,
                'category_id' => 1,
            ], [
                'coffee_id' => 2,
                'category_id' => 2,
            ], [
                'coffee_id' => 3,
                'category_id' => 1,
            ], [
                'coffee_id' => 4,
                'category_id' => 1,
            ], [
                'coffee_id' => 4,
                'category_id' => 2,
            ],
        ];

        DB::table('coffee_categories')->insert($data);
    }
}
