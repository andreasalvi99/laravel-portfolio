@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card border-dark mb-3">
            <div class="card-header d-flex justify-content-between"><i>{{$project->periodo}}</i>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">{{$project->nome}}</h5>
                    <small class="card-title">{{$project->cliente}}</small>
                </div>
                <p class="card-text">{{$project->riassunto}}</p>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="d-flex gap-1">
                <a href="{{route('projects.edit', $project->id)}}">
                    <button class="btn btn-warning btn-sm">Modifica</button>
                </a>
                <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger btn-sm" type="submit" value="Elimina">
               </form>
            </div>
        </div>
    </div>
@endsection