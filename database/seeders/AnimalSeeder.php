<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AnimalSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create('pt_BR');
        for ($i=0; $i<10; $i++) {
            DB::table('animal')->insert([
                'nome'=>$faker->lastName,
                'peso'=>$faker->numberBetween($min = 1, $max = 100),
                'porte'=>$faker->randomElement($array = array ('P','M','G')),
                'raca'=>$faker->userName,
                'tutor_id'=>$faker->numberBetween($min = 1, $max = 5),
            ]);
        }
    }
}
