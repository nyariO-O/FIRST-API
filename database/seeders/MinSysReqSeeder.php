<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinSysReqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('min_sys_reqs')->insert([
            [
                'id' => 1,
                'os' => 'windows 10',
                'cpu'=>'Intel Core i7-8700K or AMD Ryzen 5 1600X',
                'ram'=>'12 GB ОЗУ',
                'video_card'=>'NVIDIA GeForce GTX 1060, 6 GB ',
                'directx'=>'Версии 12',
                'cd'=>'25GB',

            ],
            [
                'id' => 2,
                'os' => 'windows 11',
                'cpu'=>'AMD Ryzen 7 5800X',
                'ram'=>'16 GB ОЗУ',
                'video_card'=>'NVIDIA GeForce RTX 3070, 8GB',
                'directx'=>'Версии 12',
                'cd'=>'100GB',

            ],
            [
                'id' => 3,
                'os' => 'windows 11',
                'cpu'=>'AMD Ryzen 7 5800X',
                'ram'=>'32 GB ОЗУ',
                'video_card'=>'NVIDIA GeForce RTX 3070, 8GB',
                'directx'=>'Версии 11',
                'cd'=>'10GB',

            ]


        ]);

    }
}
