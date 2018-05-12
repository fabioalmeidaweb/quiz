@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="jumbotron">
                <p class="lead">Viu como foi rápido?</p>
                <h1 class="display-4">Você é <strong>{{ $winner->title }}</strong></h1>
                <h3>{{ $winner->profile }}</h3>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Voltar para o início</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
