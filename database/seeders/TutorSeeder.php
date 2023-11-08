<?php

namespace Database\Seeders;

//use\app\Models\Tutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('pt_BR');
        for ($i=0; $i<10; $i++) {
            DB::table('tutor')->insert([
                'nome'=>$faker->name,
                'cpf'=>$faker->cpf,
                'email'=>$faker->email,
                'telefone'=>$faker->phoneNumber,
                'endereco'=>$faker->streetAddress,
            ]);
        }
    }
}
