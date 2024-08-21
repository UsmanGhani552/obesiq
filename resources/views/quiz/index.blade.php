@extends('admin.layout.master')
@section('content')
    @include('admin.layout.banner')
    <div class="startQuizDiv">
        <div class="container-fluid">
            <div class="headingSec d-flex">
                <h2>Progress</h2>
                <button class="btn">
                    <a class="text-light text-decoration-none" href="{{ route('quiz.attempt') }}">Start Quiz</a>
                </button>
            </div>
            <div class="startQuizBox">
                <div class="row">
                    <div class="col-lg-3">
                        <h3>Type</h3>
                        <input type="radio" class="btn-check" name="type" id="timed" autocomplete="off">
                        <label class="btn btn-secondary" for="timed">Timed</label>
                        <input type="radio" class="btn-check" name="type" id="un-timed" autocomplete="off">
                        <label class="btn btn-secondary" for="un-timed">Un-Timed</label>
                    </div>
                    <div class="col-lg-3">
                        <h3>Category</h3>
                        <input type="radio" class="btn-check" name="category" id="unanswered" autocomplete="off">
                        <label class="btn btn-secondary" for="unanswered">Unanswered</label>
                        <input type="radio" class="btn-check" name="category" id="answered" autocomplete="off">
                        <label class="btn btn-secondary" for="answered">Answered</label>
                        <input type="radio" class="btn-check" name="category" id="marked" autocomplete="off">
                        <label class="btn btn-secondary" for="marked">Marked</label>
                    </div>
                    <div class="col-lg-6">
                        <h3>Subjects</h3>
                        <div class="d-flex">
                            @foreach($subjects->chunk(4) as $subjectChunk)
                                <div class="column">
                                    @foreach($subjectChunk as $subject)
                                        <input type="radio" class="btn-check" name="subject" value="{{ $subject->id }}" autocomplete="off">
                                        <label class="btn btn-secondary">{{ $subject->title }}</label>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection