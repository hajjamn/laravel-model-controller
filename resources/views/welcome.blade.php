@extends('layouts.app')

@section('title','Laravel')

@section('content')

<main>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 p-2">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3>
                                {{$movie->title}}
                            </h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span>Titolo originale: {{$movie->original_title}}</span></li>
                                <li class="list-group-item"><span>Nazionalita`: {{$movie->nationality}}</span></li>
                                <li class="list-group-item"><span>Data di uscita: {{$movie->date}}</span></li>
                                <li class="list-group-item"><span>Voto: {{$movie->vote}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection