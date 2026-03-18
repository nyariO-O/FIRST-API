<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'id' => 1,
                'game_name'=>'CS2 Prime',
                'game_description'=>'Прайм-статус (Prime Status) в CS2 — это платный (около $14.99 или ~1200-1400 руб.)',
                'game_image'=>1,
                'game_price'=>'1200',
                'game_min_req'=>1,
                'publisher'=>'Valve',
                'developer'=>'Valve',
                'release_date'=>'27 сентября 2023',
                'language'=>'Русский, Английский',


            ],
            [
                'id' => 2,
                'game_name'=>'Peak',
                'game_description'=>'Игра предлагает совместное восхождение на генерируемую гору после крушения на таинственном острове. До четырёх игроков управляют скаутами-альпинистами, которые пытаются достичь вершины, преодолевая разнообразные биомы, включая прибрежные скалы, тропики, ледяные альпы и лавовую кальдеру. ',
                'game_image'=>2,
                'game_price'=>'200',
                'game_min_req'=>1,
                'publisher'=>'Landfall Games',
                'developer'=>'Aggro Crab',
                'release_date'=>'6 июня 2025',
                'language'=>'Русский, Английский',


            ],
            [
                'id' => 3,
                'game_name'=>'The Sims 4',
                'game_description'=>'The Sims — культовая серия компьютерных игр-симуляторов жизни, созданная Maxis и изданная Electronic Arts. Игрок управляет виртуальными людьми (симами), удовлетворяя их потребности, развивая навыки, строя дома и выстраивая взаимоотношения. ',
                'game_image'=>3,
                'game_price'=>'1500',
                'game_min_req'=>2,
                'publisher'=>'Electronic Arts',
                'developer'=>'Maxis',
                'release_date'=>'2 сентября 2014',
                'language'=>'Английский',


            ],




        ]);

    }
}
