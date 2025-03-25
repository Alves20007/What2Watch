@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Filmes Avaliados</h1>
    <div class="row">
        @foreach($films as $film)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ $film->poster }}" class="card-img-top" alt="{{ $film->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film->title }}</h5>
                        <p class="card-text">Nota: {{ $film->pivot->rating }}</p> 
                        <a href="{{ route('films.show', $film->id) }}" class="btn btn-primary">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
