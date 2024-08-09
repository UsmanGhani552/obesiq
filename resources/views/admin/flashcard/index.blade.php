@extends('admin.layout.master')
@section('content')
    @include('admin.layout.banner')
    <div class="flashcardDiv">
        <div class="container-fluid">
            <div class="headingSec d-flex">
                <h2>NFPA Flashcards</h2>
                <!-- <button class="btn">Start Quiz</button> -->
            </div>
            <div class="flashcardBox">
                <p>To get started, type the NFPA code number you need to study. Then select the code from the list and to add it to your flashcard deck. Once you have all the codes you need to study, select Create Flashcards to begin studying.</p>
                <div class="flashcard">
                    <div class="d-flex">
                        <input type="search" name="search" id="search" class="form-control">
                        <button class="btn">Create flashcards</button>
                    </div>
                    <div class="selectedflashcard">
                        <h6>Selected codes:</h6>
                        <div class="selection"></div>
                        <h5 class="number">0</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection