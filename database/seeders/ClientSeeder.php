<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('clients')->insert([
            'cpf' => $faker->numerify('###########'),
            'name' => $faker->name,
            'birth' => $faker->date(),
            'sex' => Arr::random(['M','F']),
            'address' => Str::random(20),
            'city' =>  $faker->city,
            'state' => $faker->state
            ,
        ]);

        DB::table('clients')->insert([
            'cpf' => $faker->numerify('###########'),
            'name' => $faker->name,
            'birth' => $faker->date(),
            'sex' => Arr::random(['M','F']),
            'address' => Str::random(20),
            'city' =>  $faker->city,
            'state' => $faker->state
            ,
        ]);

        DB::table('clients')->insert([
            'cpf' => $faker->numerify('###########'),
            'name' => $faker->name,
            'birth' => $faker->date(),
            'sex' => Arr::random(['M','F']),
            'address' => Str::random(20),
            'city' =>  $faker->city,
            'state' => $faker->state
            ,
        ]);
    }
}
