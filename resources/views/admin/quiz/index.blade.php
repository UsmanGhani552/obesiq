@extends('admin.layout.master')
@section('content')
    @include('admin.layout.banner')
    <div class="startQuizDiv">
        <div class="container-fluid">
            <div class="headingSec d-flex">
                <h2>Progress</h2>
                <a class="btn btn-primary" href="{{ route('quiz-attempt') }}">Start Quiz</a>
            </div>
            <div class="startQuizBox">
                <div class="row">
                    <div class="col-lg-3">
                        <h3>Type</h3>
                        <button class="nav-link pill" type="button">Timed</button>
                        <button class="nav-link pill" type="button">Un-Timed</button>
                    </div>
                    <div class="col-lg-3">
                        <h3>Category</h3>
                        <button class="nav-link pill" type="button">Unanswered</button>
                        <button class="nav-link pill" type="button">Answered</button>
                        <button class="nav-link pill" type="button">Marked</button>
                    </div>
                    <div class="col-lg-6">
                        <h3>Subjects</h3>
                        <div class="d-flex">
                            <div class="column">
                                <button class="nav-link pill" type="button">Epidemiology </button>
                                <button class="nav-link pill" type="button">Evaluation </button>
                                <button class="nav-link pill" type="button">Diagnosis </button>
                                <button class="nav-link pill" type="button">Treatment </button>
                            </div>
                            <div class="column">
                                <button class="nav-link pill" type="button">Pharmacology </button>
                                <button class="nav-link pill" type="button">Surgery </button>
                                <button class="nav-link pill" type="button">OBGYN</button>
                                <button class="nav-link pill" type="button">Pediatrics</button>
                            </div>
                            <div class="column">
                                <button class="nav-link pill" type="button">Random </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection