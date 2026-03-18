<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_genres')->insert([
            [
                'id' => 1,
                'genre_name' => 'Шутер',

            ],
            [
                'id' => 2,
                'genre_name' => 'Приключенческие',

            ],
            [
                'id' => 3,
                'genre_name' => 'Хоррор',

            ],
            [
                'id' => 4,
                'genre_name' => 'Симулятор',

            ]

        ]);

    }
}

