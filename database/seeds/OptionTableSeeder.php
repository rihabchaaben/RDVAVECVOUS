<?php

use App\Option;
use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [['text' => 'oui', 'question_id' => 1],
            ['text' => 'non', 'question_id' => 1],
            ['text' => 'oui', 'question_id' => 2],
            ['text' => 'non', 'question_id' => 2],
            ['text' => 'oui', 'question_id' => 3],
            ['text' => 'peut-être', 'question_id' => 3],
            ['text' => 'pas du tout', 'question_id' => 3],
            ['text' => 'satisfait', 'question_id' => 4],
            ['text' => 'moyen', 'question_id' => 4],
            ['text' => 'je ne suis pas satisfait', 'question_id' => 4]
        ];
        foreach ($options as $opt) {
            Option::create(['text' => $opt['text'], 'question_id' => $opt['question_id']]);
        }

    }
}
