<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('pt_BR');
        for ($i=0; $i<10; $i++) {
            DB::table('consulta')->insert([
                'data'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'hora'=>$faker->time($format = 'H:i', $max = 'now'),
                'animal_id'=>$faker->numberBetween($min = 1, $max = 5),
                'tipo'=>$faker->randomElement($array = array ('Exame','Consulta','Cirurgia')),
                'descricao'=>$faker->streetName,
            ]);
        }
    }
}
