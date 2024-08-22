@extends('admin.layout.master')
@section('content')
@include('admin.layout.banner')
<div class="startQuizDiv">
    <div class="container-fluid">
        <div class="headingSec d-flex">
            <h2>Progress</h2>
            {{-- <button class="btn">
                    <a class="text-light text-decoration-none" href="{{ route('quiz.attempt') }}">Start Quiz</a>
            </button> --}}
            <form action="{{ route('quiz.attempt') }}" method="POST">
                @csrf
                <input type="hidden" name="subject" id="selectedSubject">
                <input type="hidden" name="type" id="selectedType">
                <input type="hidden" name="category" id="selectedCategory">

                <button class="btn" id="startQuizForm" type="submit">Start Quiz</button>
            </form>
        </div>
        <div class="startQuizBox">
            <div class="row">
                <div class="col-lg-3">
                    <h3>Type</h3>
                    <input type="radio" class="btn-check" name="type" id="timed" value="timed" autocomplete="off">
                    <label class="btn btn-secondary" for="timed">Timed</label>
                    <input type="radio" class="btn-check" name="type" id="un-timed" value="un-timed" autocomplete="off">
                    <label class="btn btn-secondary" for="un-timed">Un-Timed</label>
                </div>
                <div class="col-lg-3">
                    <h3>Category</h3>
                    <input type="radio" class="btn-check" name="category" id="unanswered" value="unanswered" autocomplete="off">
                    <label class="btn btn-secondary" for="unanswered">Unanswered</label>
                    <input type="radio" class="btn-check" name="category" id="answered" value="answered" autocomplete="off">
                    <label class="btn btn-secondary" for="answered">Answered</label>
                    <input type="radio" class="btn-check" name="category" id="marked" value="marked" autocomplete="off">
                    <label class="btn btn-secondary" for="marked">Marked</label>
                </div>
                <div class="col-lg-6">
                    <h3>Subjects</h3>
                    <div class="d-flex">
                        @foreach($subjects->chunk(4) as $subjectChunk)
                            <div class="column">
                                @foreach($subjectChunk as $subject)
                                    <input type="radio" class="btn-check" name="subject" id="subject-{{ $subject->id }}" value="{{ $subject->id }}" autocomplete="off">
                                    <label class="btn btn-secondary" for="subject-{{ $subject->id }}">{{ $subject->title }}</label>
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
@push('scripts')
<script>
    $('#startQuizForm').on('click' , function() {
        // e.preventDefault();
        var type = $('input[name="type"]:checked').val();
        var category = $('input[name="category"]:checked').val();
        var subject = $('input[name="subject"]:checked').val();
        console.log(subject,type,category);

        if (type && category && subject) {
            $('#selectedType').val(type);
            $('#selectedCategory').val(category);
            $('#selectedSubject').val(subject);
        } else {
            event.preventDefault();
            alert('Please select a type, category, and subject.');
        }
    });

</script>
@endpush
