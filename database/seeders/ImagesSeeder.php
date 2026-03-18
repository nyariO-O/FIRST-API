<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'id' => 1,
                'image' => 'img/cs',


            ],
            [
                'id' => 2,
                'image' => 'img/peak',


            ],
            [
                'id' => 3,
                'image' => 'img/sims',


            ],



        ]);

    }
}

