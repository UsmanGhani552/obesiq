<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestion;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return view('quiz.index',[
            'subjects' => $subjects
        ]);
    }
    public function quizAttempt(Request $request){
        $subjectId = $request->subject;
        $subject = Subject::findOrFail($subjectId);
        $type = $request->type;
        $category = $request->category;
        return view('quiz.quiz_attempt',[
            'subject' => $subject,
            'type' => $type,
            'category' => $category,

        ]);
    }
    public function getQuiz($subject_id){
        $subject = Subject::findOrFail($subject_id);
        $questions = QuizQuestion::where('subject_id',$subject_id)->get()->toArray();
        return response([
            'subject' => $subject,
            'questions' => $questions
        ]);
    }
    public function submitQuiz(Request $request)
    {
        $answers = $request->input('answers');
        $subject_id = $request->input('subject_id');
        $questions = QuizQuestion::where('subject_id', $subject_id)->get();
        $results = [];
        foreach ($questions as $question) {
            $selected_answer = isset($answers[$question->id]) ? $answers[$question->id] : null;
            $correct = $selected_answer && $question->correct_answer === explode(",", $selected_answer)[0];
            // dd($correct);
            $results[] = [
                'question' => $question->question,
                'option1' => $question->option1,
                'option2' => $question->option2,
                'option3' => $question->option3,
                'option4' => $question->option4,
                'selected_answer' => $selected_answer ?? '',
                'correct_answer' => $question->correct_answer,
                'explanation' => $question->explanation,
                'is_correct' => $correct ?? ''
            ];
        }
        // dd($results);
        return response()->json([
            'status_code' => 200,
            'results' => $results
        ]);
    }

    public function quizResult(){
        return view('quiz.quiz_result');
    }
}
