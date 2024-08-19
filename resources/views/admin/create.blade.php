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
                <form action="">
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="Question Name" class="form-label">Question Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3 choice">
                        <label for="Add Multiple Choice Options" class="form-label">Add Multiple Choice Options</label>
                        <div class="d-flex">
                            <div class="option">
                                <div class="input-group">
                                    <span class="number">1</span>
                                    <input type="text" class="form-control">
                                </div>
                                <div>
                                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
                                <label class="form-check-label" for="flexSwitchCheckReverse">Right Answer</label>
                                </div>
                            </div>
                            <div class="option">
                                <div class="input-group">
                                    <span class="number">2</span>
                                    <input type="text" class="form-control">
                                </div>
                                <div>
                                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
                                <label class="form-check-label" for="flexSwitchCheckReverse">Right Answer</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="option">
                                <div class="input-group">
                                    <span class="number">3</span>
                                    <input type="text" class="form-control">
                                </div>
                                <div>
                                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
                                <label class="form-check-label" for="flexSwitchCheckReverse">Right Answer</label>
                                </div>
                            </div>
                            <div class="option">
                                <div class="input-group">
                                    <span class="number">4</span>
                                    <input type="text" class="form-control">
                                </div>
                                <div>
                                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
                                <label class="form-check-label" for="flexSwitchCheckReverse">Right Answer</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Answer Explanation" class="form-label">Answer Explanation</label>
                        <textarea name="explanation" id="explanation" class="form-control"></textarea>
                    </div>
                </form>
                <div class="container-fluid buttons">
                    <div class="d-flex">
                        <button class="btn">CANCEL</button>
                        <button class="btn">SAVE & CONTINUE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection