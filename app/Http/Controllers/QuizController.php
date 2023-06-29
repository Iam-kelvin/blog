<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    //
    public function index()
    {
        $questions = Question::all();
        return view('quiz', compact('questions'));
    }

    public function score(Request $request)
    {
        $answers = $request->input('answers');
    $questions = Question::all();
    $score = 0;

    foreach ($questions as $question) {
        $answerKey = 'answer_' . $question->id;

        if ($question->answer == $answers[$answerKey][0]) {
            $score++;
        }

        // Save the user's answer in the database
        $question->user_answer = $answers[$answerKey][0];
        $question->save();
    }

    return view('score', compact('score'));
    }
}
