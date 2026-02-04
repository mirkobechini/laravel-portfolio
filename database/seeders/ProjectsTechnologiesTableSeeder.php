<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projects = Project::all();
        $technologies = Technology::all()->pluck('id')->toArray();

        foreach ($projects as $project) {
            // Assegna un numero casuale di tecnologie (da 1 a 3) a ogni progetto
            $randomTechnologies = $faker->randomElements($technologies, $faker->numberBetween(1, 3));
            $project->technologies()->attach($randomTechnologies);
        }
    }
}
