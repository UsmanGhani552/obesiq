<?php

use App\Http\Controllers\Admin\StoreQuizController;
use App\Http\Controllers\Admin\SubjectController;
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

Route::get('/', function () {
    return redirect('/login');
});
Route::middleware('auth')->group(function () {
    // Route::view('/admin/quiz/index', 'admin.index')->name('admin.index');
    // Route::view('/admin/quiz/create', 'admin.create')->name('admin.create');
    Route::get('/admin/quiz/index', [StoreQuizController::class, 'index'])->name('admin.quiz.index');
    Route::get('/admin/quiz/create', [StoreQuizController::class, 'create'])->name('admin.quiz.create');
    Route::post('/admin/quiz/store', [StoreQuizController::class, 'store'])->name('admin.quiz.store');
    Route::get('/admin/quiz/edit/{quizQuestion}', [StoreQuizController::class, 'edit'])->name('admin.quiz.edit');
    Route::post('/admin/quiz/update/{quizQuestion}', [StoreQuizController::class, 'update'])->name('admin.quiz.update');
    Route::get('/admin/quiz/delete/{quizQuestion}', [StoreQuizController::class, 'destroy'])->name('admin.quiz.delete');
    
    Route::get('/admin/subject/index', [SubjectController::class, 'index'])->name('admin.subject.index');
    Route::get('/admin/subject/create', [SubjectController::class, 'create'])->name('admin.subject.create');
    Route::post('/admin/subject/store', [SubjectController::class, 'store'])->name('admin.subject.store');
    Route::get('/admin/subject/edit/{subject}', [SubjectController::class, 'edit'])->name('admin.subject.edit');
    Route::post('/admin/subject/update/{subject}', [SubjectController::class, 'update'])->name('admin.subject.update');
    Route::get('/admin/subject/delete/{subject}', [SubjectController::class, 'destroy'])->name('admin.subject.delete');
    
    Route::view('/dashboard', 'admin.dashboard.index')->name('dashboard');
    Route::view('/flashcard', 'admin.flashcard.index')->name('flashcard');
    Route::view('/progress', 'admin.progress.index')->name('progress');
    
    // Route::view('/quiz','admin.quiz.index')->name('quiz');
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');
    Route::get('/quiz/{subject_id}', [QuizController::class, 'getQuiz'])->name('get-quiz');
    Route::post('/quiz-attempt', [QuizController::class, 'quizAttempt'])->name('quiz.attempt');
    Route::post('/quiz/submit', [QuizController::class, 'submitQuiz'])->name('quiz.submit');
    Route::get('/quiz-results', [QuizController::class, 'quizResult'])->name('quiz.result');
    // Route::view('/quiz-results', 'quiz.quiz_result')->name('quiz-result');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
