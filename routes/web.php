<?php

use App\Http\Controllers\QuizController;
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
Route::middleware('auth')->group(function () {
    Route::view('/quiz/index', 'admin.index')->name('admin.index');
    Route::view('/quiz/create', 'admin.create')->name('admin.create');
    
    Route::view('/dashboard', 'admin.dashboard.index')->name('dashboard');
    Route::view('/flashcard', 'admin.flashcard.index')->name('flashcard');
    Route::view('/progress', 'admin.progress.index')->name('progress');
    Route::view('/quiz','admin.quiz.index')->name('quiz');

    Route::get('/quiz-attempt', [QuizController::class, 'index'])->name('quiz-attempt');
    Route::post('/quiz/submit', [QuizController::class, 'submitQuiz'])->name('quiz.submit');
    Route::get('/quiz/{subject_id}', [QuizController::class, 'getQuiz'])->name('get-quiz');

    Route::view('/quiz-results', 'admin.quiz-result.index')->name('quiz-result');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
