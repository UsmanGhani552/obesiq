@extends('admin.layout.master')
@section('content')
    <div class="startQuizDiv">
        <div class="container-fluid">
            <div class="headingSec d-flex">
                <h2>Progress</h2>
                <!-- <button class="btn">Start Quiz</button> -->
            </div>
            <div class="startQuizBox">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ ('assets/img/progress.png') }}" alt="">
                        <img src="{{ ('assets/img/progress.png') }}" alt="">
                    </div>
                    <div class="col-lg-4">
                        <div class="score">
                            <h3>Your Score</h3>
                            <div class="scores">
                                <div class="d-flex">
                                    <p>Total Correct</p>
                                    <div class="count"><p>7</p></div>
                                </div>
                                <div class="d-flex">
                                    <p>Total Incorrect</p>
                                    <div class="count"><p>7</p></div>
                                </div>
                                <div class="d-flex">
                                    <p>Total Omitted </p>
                                    <div class="count"><p>7</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="answer">
                            <h3>Your Score</h3>
                            <div class="scores">
                                <div class="d-flex">
                                    <p>Total Correct</p>
                                    <div class="count"><p>7</p></div>
                                </div>
                                <div class="d-flex">
                                    <p>Total Incorrect</p>
                                    <div class="count"><p>7</p></div>
                                </div>
                                <div class="d-flex">
                                    <p>Total Omitted </p>
                                    <div class="count"><p>7</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn">Back To Quiz</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection