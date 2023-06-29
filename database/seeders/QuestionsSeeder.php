<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $questions = [
            [
                'question' => 'What is the capital of France?',
                'option_a' => 'London',
                'option_b' => 'Paris',
                'option_c' => 'Berlin',
                'option_d' => 'Madrid',
                'answer' => 'option_b',
            ],
            // Add more questions here
        ];
    
        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
