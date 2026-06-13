<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = ['HTML', 'CSS', 'React', 'Node.js', 'Express', 'JavaScript', 'Bootstrap', 'MySQL'];

        foreach ($technologies as $technology) {
            
            $newTechnology = new Technology();

            $newTechnology->nome = $technology;
            $newTechnology->colore = $faker->hexColor();
            $newTechnology->descrizione = $faker->text(200);

            $newTechnology->save();

        }
    }
}
