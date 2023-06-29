<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Retrieve the answers submitted by the user
        $answers = $request->all();

        // Retrieve the correct answers from the database
        $questions = Question::all();
        $correctAnswers = [];
        foreach ($questions as $question) {
            $correctAnswers[$question->id] = $question->answer;
        }

        // Calculate the score
        $score = 0;
        foreach ($answers as $questionId => $answer) {
            if ($answer == $correctAnswers[$questionId]) {
                $score++;
            }
        }

        // Save the score to the database
        $user = Auth::user();
        $user->score = $score;
        $user->save();

        // Return the score to the view
        return view('score', ['score' => $score]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        //
    }
}
