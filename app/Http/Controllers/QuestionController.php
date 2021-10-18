<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Question;
use App\Answer;
use App\AnswerQuestion;
use App\Rrenovation;
use App\QuestionRrenovation;

class QuestionController extends Controller
{
    public function getquestions(Request $request)
    {
        $questions = Rrenovation::find($request->get('id'))->Questions()->with('Answers')->orderBy('id')->get();
        return response()->json(['questions' => $questions]);

    }


   

}
