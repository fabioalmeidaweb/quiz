@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $question->question }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('question.answer') }}">
                        @csrf
                        <input type="hidden" name="question" value="{{ $question->id }}">
                        @foreach($question->answers AS $answer)
                            <div class="form-group">
                                <input type="radio" name="answer" id="answer_{{$answer->id}}" value="{{ $answer->id }}" required>
                                <label for="answer_{{$answer->id}}">{{ $answer->answer }}</label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-dark">Próximo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
