<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RrenovationsTableSeeder::class,
                     QuestionsTableSeeder::class,
                     QuestionRrenovationTableSeeder::class,
                     AnswersTableSeeder::class,
                     AnswerQuestionTableSeeder::class,
                    ]);
    }
}
