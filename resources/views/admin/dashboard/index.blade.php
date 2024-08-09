@extends('admin.layout.master')
@section('content')
    @include('admin.layout.banner')
    <div class="progressDiv">
        <div class="container-fluid">
            <div class="headingSec">
                <h2>Progress Report</h2>
            </div>
            <div class="progressBox">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/img/progress.png') }}" alt="">
                    </div>
                    <div class="col-lg-4">
                        <h3>Your Score</h3>
                        <div class="scores">
                            <div class="d-flex">
                                <p>Total Correct</p>
                                <div class="count">
                                    <p>7</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <p>Total Incorrect</p>
                                <div class="count">
                                    <p>7</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <p>Total Omitted </p>
                                <div class="count">
                                    <p>7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3>Your Score</h3>
                        <div class="scores">
                            <div class="d-flex">
                                <p>Total Correct</p>
                                <div class="count">
                                    <p>7</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <p>Total Incorrect</p>
                                <div class="count">
                                    <p>7</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <p>Total Omitted </p>
                                <div class="count">
                                    <p>7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection