<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
            Article::create(
                [
                    'title' => $title,
                    'slug' => str_replace(" ", "-", $title),
                    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                ]
                );
            }
    }
}
