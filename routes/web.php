<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/question', [App\Http\Controllers\QuestionController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\QuizController::class, 'index'])->name('quiz.index');
Route::post('/score', [App\Http\Controllers\QuizController::class, 'score'])->name('quiz.score');