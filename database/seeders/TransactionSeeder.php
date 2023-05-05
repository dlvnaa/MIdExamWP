<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            //Purchase Mr Vico Lomar
            [
                'user_id' => 1,
                'coffee_id' => 1,
                'created_at' => "2023-03-19"
            ], [
                'user_id' => 1,
                'coffee_id' => 1,
                'created_at' => "2023-03-20"
            ],[
                'user_id' => 1,
                'coffee_id' => 2,
                'created_at' => "2023-03-21"

            ],

            // Purchase Ms Fei Fei Li
            [
                'user_id' => 2,
                'coffee_id' => 4,
                'created_at' => "2023-03-18"

            ], [
                'user_id' => 2,
                'coffee_id' => 2,
                'created_at' => "2023-03-19"

            ],[
                'user_id' => 2,
                'coffee_id' => 3,
                'created_at' => "2023-03-21"
            ],
        ];

        DB::table('transactions')->insert($data);
    }
}
