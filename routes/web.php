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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/dashboard','admin.dashboard.index')->name('dashboard');
Route::view('/flashcard','admin.flashcard.index')->name('flashcard');
Route::view('/progress','admin.progress.index')->name('progress');
Route::view('/quiz','admin.quiz.index')->name('quiz');
Route::view('/quiz-attempt','admin.quiz-attempt.index')->name('quiz-attempt');
Route::view('/quiz-result','admin.quiz-result.index')->name('quiz-result');