@extends('admin.layout.master')
@section('content')
@include('admin.layout.banner')
<style>
    .option-btn.selected {
        background-color: #596268 !important;
    }

    .option-btn.disabled {
        background-color: #f8f9fa;
        color: #6c757d;
        border: 1px solid #dee2e6;
        pointer-events: none;
    }

    .hidden {
        visibility: hidden
    }

</style>
<div class="quizDiv">
    <div class="container-fluid">
        <div class="headingSec d-flex">
            <h2 id="quiz-title">Quiz</h2>
            @if($type == "timed")
            <div class="btn-group">
                <h5 id="timer">05:00</h5>
                <button class="btn">Save & Exit</button>
            </div>
            @endif
        </div>
        <div class="quizBox">
            <div class="question">
                <div class="questionBox">
                    <h6 id="question-number">Question No 1</h6>
                    <p id="question-text">Loading question...</p>
                </div>
                <div class="flag">
                    <button class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_423_1156)">
                                <path d="M13.2131 6.09618C12.8008 5.81823 12.2749 5.64566 11.7663 5.47876C11.3035 5.32689 10.8281 5.17087 10.4905 4.94744C10.6985 4.53556 11.1148 3.74071 11.6094 2.95239C12.8828 0.923098 13.4835 0.820312 13.591 0.820312C13.8175 0.820312 14.0011 0.636672 14.0011 0.410156C14.0011 0.183641 13.8175 0 13.591 0C11.6699 0 10.7017 0.586168 9.76533 1.15303C8.88664 1.68503 8.05667 2.1875 6.36456 2.1875C5.59212 2.1875 4.95491 2.08671 4.35925 1.87034C3.83255 1.67902 3.41053 1.42352 2.96373 1.15303C2.80112 1.05459 2.63424 0.953859 2.46094 0.855504V8.91704C2.48691 8.93277 2.51262 8.94821 2.53889 8.96413C2.99994 9.24328 3.4767 9.53189 4.07917 9.75075C4.75798 9.99731 5.50553 10.1172 6.36456 10.1172C8.28565 10.1172 9.25386 9.53102 10.1902 8.96416C11.0689 8.43216 11.8989 7.92969 13.591 7.92969C13.8175 7.92969 14.0011 7.74605 14.0011 7.51953C14.0011 6.92754 13.736 6.44864 13.2131 6.09618Z" fill="#1581B1" />
                                <path d="M0 13.9999V0.820312C0 0.367254 0.367008 0 0.819738 0C1.27247 0 1.63948 0.367254 1.63948 0.820312V13.9999H0Z" fill="#1581B1" />
                            </g>
                            <defs>
                                <clipPath id="clip0_423_1156">
                                    <rect width="14" height="14" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="options"></div>
            <div class="navigation">
                <button class="previous btn">PREVIOUS</button>
                <button class="next btn">NEXT</button>
                <button class="next btn d-none" id="submit-quiz">Submit Quiz</button>
            </div>
        </div>
    </div>
</div>

{{-- <form id="quiz-form" method="POST" action="{{ route('quiz.submit') }}">
@csrf
<input type="hidden" name="subject_id" id="subject-id">
<input type="hidden" name="answers" id="answers">
</form> --}}


@endsection


@push('scripts')
<script>
    $(document).ready(function() {
        var type = "{{ "$type" }}";
        var category = "{{ "$category" }}";
        if (type == 'timed') {

            var duration = {{$subject->time}}* 60; // 5 minutes

            var timerInterval = setInterval(function() {
                var minutes = Math.floor(duration / 60);
                var seconds = duration % 60;

                // Format the time as MM:SS
                var formattedTime =
                    (minutes < 10 ? '0' : '') + minutes + ":" +
                    (seconds < 10 ? '0' : '') + seconds;

                $('#timer').text(formattedTime);

                // Decrement the duration
                duration--;

                // Check if the timer has reached zero
                if (duration < 0) {
                    clearInterval(timerInterval);
                    $('#timer').text("Time's up!");
                    submitQuiz();
                }
            }, 1000);
        }

        const subjectId = {{$subject->id}};
        let currentQuestion = 0;
        let answers = {};
        let questions = [];

        function loadQuiz() {
            $.ajax({
                url: `/quiz/${subjectId}`, 
                method: 'GET',
                success: function(data) {
                    if (data.questions && Array.isArray(data.questions) && data.questions.length > 0) {
                        questions = data.questions; // Assign fetched questions to the global variable
                        loadQuestion(currentQuestion);
                    } else {
                        console.error('No questions found for the quiz.');
                        $('#question-text').text('No questions found for the quiz.');
                    }
                },
                error: function(err) {
                    console.error('Error fetching quiz data:', err);
                }
            });
        }

        function loadQuestion(index) {
            if (questions.length > 0 && index < questions.length) {
                const question = questions[index];
                $('#question-number').text('Question No ' + (index + 1));
                $('#question-text').text(question.question);
                $('.options').empty();

                // Use the separate option fields
                const options = [
                    question.option1
                    , question.option2
                    , question.option3
                    , question.option4
                ];
                const correct_answer = question.correct_answer;
                // Default to an empty array if options is undefined
                $.each(options, function(i, option) {
                    console.log(correct_answer == changeToAlpha(i));
                    $('.options').append(
                        `<button class="nav-link pill option-btn ${category == 'answered' ? (correct_answer == changeToAlpha(i) ? 'bg-success' : '') : ''}" id="${changeToAlpha(i)}" data-question-id="${questions[index].id}" data-option="${option}">${option}</button>`
                    );
                });
            } else {
                console.error('Question index is out of bounds or questions array is empty.');
            }
        }

        function changeToAlpha(i) {
            switch (i) {
                case 0:
                    return 'a';
                case 1:
                    return 'b';
                case 2:
                    return 'c';
                case 3:
                    return 'd';
            }
        }

        $(document).on('click', '.option-btn', function() {

            const questionId = $(this).data('question-id');
            const selectedOption = $(this).data('option');
            var elementId = $(this).attr('id');

            // Remove selected class from other buttons for the same question
            $(`.option-btn[data-question-id="${questionId}"]`).removeClass('selected');

            // Add selected class to the clicked button
            $(this).addClass('selected');
            answers[questionId] = elementId + ',' + selectedOption;
        });

        $('.next').click(function() {
            $('.previous').removeClass('hidden')
            if (currentQuestion >= questions.length - 2) {
                $(this).addClass('hidden')
                $('#submit-quiz').removeClass('d-none')
            }
            currentQuestion++;
            loadQuestion(currentQuestion);
        });

        $('.previous').click(function() {
            $('.next').removeClass('hidden')
            $('#submit-quiz').addClass('d-none')
            if (!(currentQuestion > 1)) {
                $(this).addClass('hidden')
            }
            if (currentQuestion > 0) {
                currentQuestion--;
                loadQuestion(currentQuestion);
            }
        });

        function submitQuiz() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#answers').val(JSON.stringify(answers));
            console.log(answers);

            $.ajax({
                url: `/quiz/submit`
                , method: 'POST'
                , data: {
                    subject_id: subjectId
                    , answers: answers
                , }
                , success: function(data) {
                    console.log(data);
                    sessionStorage.setItem('quizResults', JSON.stringify(data.results));
                    if (data.status_code == 200) {
                        window.location.href = '/quiz-results';
                    }
                }
                , error: function(err) {
                    console.error('Error posting:', err);
                }
            });
        }

        $('#submit-quiz').click(function(e) {
            e.preventDefault();
            submitQuiz();
        });
        loadQuiz(); // Initialize the quiz on page load
    });

</script>
@endpush
