@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a href="{{route('technologies.create')}}">
            <button class="btn btn-outline-primary my-3"><i class="bi bi-plus-lg"></i></button>
        </a>
        <div class="row row-cols-4 g-3">
            @foreach ($technologies as $technology)
                <div class="col">
                    <div class="card border mb-3 h-100">
                        <div class="card-header">
                            <small>
                                <span class="badge rounded-pill" style="background-color: {{$technology->colore}}">{{$technology->nome}}</span>
                            </small>
                        </div>
                        <div class="card-body" style="color: {{$technology->colore}}">
                            <h5 class="card-title">{{$technology->nome}}</h5>
                            <p class="card-text">{{$technology->descrizione}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection