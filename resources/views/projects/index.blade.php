@extends('layouts.app')
{{-- @dd($projects) --}}
@section('content')
    <div class="container mt-5">
        <a href="{{route('projects.create')}}">
            <button class="btn btn-primary my-3">Nuovo progetto</button>
        </a>
        @foreach ($projects as $project )
            <div class="card border-dark mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{$project->nome}}</h5>
                        <p class="card-text"><i>{{$project->periodo}}</i></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{$project->cliente}}</p>
                        <div class="d-flex flex-column gap-1">
                            <a href="{{route('projects.edit', $project->id)}}">
                            <button class="btn btn-warning btn-sm">Modifica</button>
                            </a>
                            <form action="{{route('projects.destroy', $project->id)}}", method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger btn-sm" type="submit" value="Elimina">
                           </form>
                        </div>
                    </div>
                    <a href="{{ route('projects.show', $project)}}" class="btn btn-dark">More</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection