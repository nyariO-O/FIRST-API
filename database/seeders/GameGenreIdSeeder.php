<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameGenreIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_genre_ids')->insert([
            [
                'id' => 1,
                'game_id'=>1,
                'genre_id'=>1,
            ],
            [
                'id' => 2,
                'game_id'=>2,
                'genre_id'=>2,
            ],
            [
                'id' => 3,
                'game_id'=>3,
                'genre_id'=>4,
            ],




        ]);

    }
}

