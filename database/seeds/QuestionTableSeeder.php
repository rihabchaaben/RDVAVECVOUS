<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            ['text' => 'Avez vous été satisfait par la qualité  d’écoute', 'type' => 1, 'questionnaire_id' => 1],
            ['text' => 'A-t-il su répondre à vos interrogations', 'type' => 2, 'questionnaire_id' => 1],
            ['text' => 'Si le devis que vous recevrez vous convient, aimeriez-vous travailler avec', 'type' => 3, 'questionnaire_id' => 1],
            ['text' => 'Vous etes satisfait de notre service', 'type' => 4, 'questionnaire_id' => 1]
        ];
        foreach ($questions as $quest) {
            Question::create(['text' => $quest['text'], 'type' => $quest['type'], 'questionnaire_id' => $quest['questionnaire_id']]);
        }

    }
}
