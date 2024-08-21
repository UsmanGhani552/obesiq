@extends('admin.layout.master')
@section('content')
{{-- <div class="startQuizDiv">
        <div class="container-fluid">
            <div class="headingSec d-flex">
                <h2>Progress</h2>
                <!-- <button class="btn">Start Quiz</button> -->
            </div>
            <div class="startQuizBox">
                <div class="row">
                    <div class="col-lg-4">
                        <canvas class="myDonutChart" style="height: 300px !important; width:300px !important;"></canvas>
                        <canvas class="myDonutChart2" style="height: 300px !important; width:300px !important;"></canvas>
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
    </div> --}}
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    .result-container {
        border: 1px solid #ccc;
        padding: 15px;
        margin-bottom: 20px;
    }

    .question {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .options {
        margin-bottom: 10px;
    }

    .option {
        padding: 5px;
        border: 1px solid #ccc;
        margin: 2px 0;
        border-radius: 4px;
        display: block;
    }

    .correct {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .selected {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .explanation {
        font-style: italic;
        color: #6c757d;
    }

</style>

<h1>Quiz Results</h1>
<div id="results-container"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Retrieve results from session storage
        const results = JSON.parse(sessionStorage.getItem('quizResults'));

        if (results) {
            const container = document.getElementById('results-container');
            results.forEach(result => {
                console.log(result.selected_answer.split(",")[1]);
                const resultDiv = document.createElement('div');
                resultDiv.classList.add('result-container');

                function span(optionId, option) {
                    return `<span class="option ${result.correct_answer === optionId ? 'correct' : (result.selected_answer.split(",")[1] === option ? 'selected' : '')}">${option}</span>`
                }
                resultDiv.innerHTML = ` 
                <div class="question">${result.question}</div>
                <div class="options">
                    ${span('a',result.option1)}
                    ${span('b',result.option2)}
                    ${span('c',result.option3)}
                    ${span('d',result.option4)}
                </div>
                ${!result.is_correct ? `<div class="explanation">${result.explanation}</div>` : ''}`;

                container.appendChild(resultDiv);
            });
        }
    });

</script>
@endsection
