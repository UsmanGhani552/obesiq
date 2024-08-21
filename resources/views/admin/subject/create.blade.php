@extends('admin.layout.master')
@section('content')
<div class="body">
    <div class="addQuestionDiv">
        <div class="container-fluid">
            <div class="headingSec d-flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Quizes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create New Quiz</li>
                </ol>
            </nav>
                <!-- <h2>Progress</h2> -->
                <!-- <button class="btn">Start Quiz</button> -->
            </div>
            <div class="addQuestionBox">
                <div class="info">
                    <h2>Questions</h2>
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look.</p>
                    <h6>Create Questions</h6>
                </div>
                <form action="{{ route('admin.subject.store') }}" method="POST" >
                    @csrf
                   
                    <div class="mb-3">
                        <label for="Question Name" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="Question Name" class="form-label">Time</label>
                        <input type="number" name="time" class="form-control">
                    </div>
                    <div class="container-fluid buttons">
                        <div class="d-flex">
                            <button class="btn">CANCEL</button>
                            <button class="btn" type="submit">SAVE & CONTINUE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection