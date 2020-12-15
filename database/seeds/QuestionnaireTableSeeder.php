<?php

use App\Questionnaire;
use Illuminate\Database\Seeder;

class QuestionnaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Questionnaire::create(['nom' => 'mission accomplis', 'type' => 1]);
    }
}
