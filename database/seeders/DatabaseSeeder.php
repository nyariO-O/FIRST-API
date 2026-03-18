<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
        {$this->call(ImagesSeeder::class);
            $this->call(GameGenreSeeder::class);
            $this->call(MinSysReqSeeder::class);
        $this->call(GamesSeeder::class);
        $this->call(GameGenreIdSeeder::class);

    }
}
