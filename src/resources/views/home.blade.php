@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Humor Geek</h1>
                <p class="lead">Em um dia, que série melhor representa você?</p>
                <hr class="my-4">
                <p>Responda as questões e descubra qual série representa você. Não se preocupe, levará poucos minutos!</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{ route('question.show') }}" role="button">Começar</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
