<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QuizQuestion\StoreQuizQuestionRequest;
use App\Http\Requests\Admin\QuizQuestion\UpdateQuizQuestionRequest;
use App\Models\QuizQuestion;
use App\Models\Subject;
use Exception;
use Illuminate\Http\Request;

class StoreQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizQuestions = QuizQuestion::all();
        return view('admin.index',[
            'quizQuestions' => $quizQuestions
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('admin.create',[
            'subjects' => $subjects
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuizQuestionRequest $request)
    {
        try{
            QuizQuestion::create($request->validated());
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
        return redirect()->route('admin.quiz.index')->with('success', 'Question added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuizQuestion $quizQuestion)
    {
        $subjects = Subject::all();
        return view('admin.edit',[
            'subjects' => $subjects,
            'quizQuestion' => $quizQuestion,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuizQuestionRequest $request, QuizQuestion $quizQuestion)
    {
        try{
            $quizQuestion->update($request->validated());
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
        return redirect()->route('admin.quiz.index')->with('success', 'Question updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuizQuestion $quizQuestion)
    {
        try {
            $quizQuestion->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
        return redirect()->route('admin.quiz.index')->with('success', 'Question deleted successfully!');
    }
}
