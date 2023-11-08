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
    {
        $this->call([TutorSeeder::class]);
        $this->call([AnimalSeeder::class]);
        $this->call([ConsultaSeeder::class]);
    }
}
