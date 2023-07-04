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
        // dd($questions);
    }

    public function score(Request $request)
    {
        $answers = $request->input('answers');
        $questions = $this->questions;
        $score = 0;
        // dd($answers);


        foreach ($questions as $question) {
            // $answerKey = 'answer_' . $question->id;

            if ($question->answer === $answers[$question->id]) {
                $score++;
            }

        // Save the user's answer in the database
        $question->user_answer = $answers[$question->id];
        // $question->save();
        }

        return view('score', compact('score'));
    }
}
