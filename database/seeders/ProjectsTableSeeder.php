<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project;
            $newProject->title = $faker->sentence(3);
            $newProject->customer = $faker->company();
            $newProject->description = $faker->paragraphs(3, true);
            $newProject->cover_image = $faker->imageUrl(640, 480, 'projects', true);
            $newProject->type_id = $faker->numberBetween(1, 6);
            $newProject->save();
        }
    }
}
