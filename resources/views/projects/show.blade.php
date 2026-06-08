@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card border-dark mb-3">
            <div class="card-header"><i>{{$project->periodo}}</i></div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">{{$project->nome}}</h5>
                    <small class="card-title">{{$project->cliente}}</small>
                </div>
                <p class="card-text">{{$project->riassunto}}</p>
            </div>
        </div>
    </div>
@endsection