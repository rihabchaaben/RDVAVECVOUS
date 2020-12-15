<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Option;
use App\Question;
use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function index()
    {
        $questionnaires = Questionnaire::all();
        return view('demandeur.questionnaire.index', compact('questionnaires'));
    }

    public function save(Request $request)
    {
        $answers = $request->except('_token', 'proposition');
        foreach ($answers as $answer) {
            Answer::create(['option_question_id' => $answer, 'proposition_id' => $request->proposition]);
        }

    }
}
