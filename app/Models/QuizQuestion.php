<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;
    protected $table = 'quiz_questions';
    protected $fillable = [
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'explanation',
        'subject_id',
        'correct_answer',
    ];

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
}
