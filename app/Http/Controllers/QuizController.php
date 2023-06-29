<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    public $questions;
    
    public function __construct()
    {
        $this->questions = Question::all();
    }

    //
    public function index()
    {
        $questions = $this->questions; // Question::all();
        return view('quiz', compact('questions'));
    }

    public function score(Request $request)
    {
        $answers = $request->input('answers');
    $questions = Question::all();
    $score = 0;

        foreach ($questions as $question) {
            // $answerKey = 'answer_' . $question->id;

            if ($question->answer === $answers[$question->id]) {
                $score++;
            }

        // Save the user's answer in the database
        $question->user_answer = $answers[$answerKey][0];
        $question->save();
    }

        return view('score', compact('score'));
    }
}
