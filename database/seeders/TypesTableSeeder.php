<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = [
            [
                'name' => '',
                'description' => 'Default type for uncategorized projects.'
            ],
            [
                'name' => 'Graphic Design',
                'description' => 'Projects focused on visual content creation and design.'
            ],
            [
                'name' => 'Web Development',
                'description' => 'Projects related to web development using various technologies.'
            ],
            [
                'name' => 'Mobile Apps',
                'description' => 'Development of mobile applications for Android and iOS platforms.'
            ],
            [
                'name' => 'Data Science',
                'description' => 'Projects involving data analysis, machine learning, and AI.'
            ],
            [
                'name' => 'Game Development',
                'description' => 'Creation of video games across different genres and platforms.'
            ]
        ];
        foreach ($types as $typeData) {
            $newType = new Type();
            $newType->name = $typeData['name'];
            $newType->description = $typeData['description'];
            $newType->save();
        }
    }
}
