<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
                'name' => 'Iced Aren Latte',
                'description' => 'Lelehan gula merah alami dalam latte khas Fore Coffee. Aroma Asli Indonesia',
                'images' => 'kopi1.jpg'

            ], [
                'name' => 'Caramel Praline Machiatto',
                'description' => 'Latte dengan saus Praline dan karamel dengan rasa dan aroma manis',
                'images' => 'kopi2.jpg'
            ], [
                'name' => 'Double Iced Shaken Latte',
                'description' => 'Paduan klasik 2 shot espresso dengan susu dan krim',
                'images' => 'kopi3.jpg'

            ], [
                'name' => 'Hazelnut Latte',
                'description' => 'Latte dengan aroma dan sesasi nutty dari hazelnut premium khas Fore',
                'images' => 'kopi4.jpg'
            ],
        ];

        DB::table('coffees')->insert($data);
    }
}
