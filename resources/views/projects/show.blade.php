@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card border-dark mb-3">
            <div class="card-header d-flex justify-content-between"><i>{{$project->periodo}}</i>
            {{$project->type->nome}}
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="card-title d-inline-block me-2">{{$project->nome}}</h4>
                        @foreach ($project->technologies as $technology)
                            <span class="badge rounded-pill" style="background-color: {{$technology->colore}}">{{$technology->nome}}</span>
                        @endforeach
                    </div>
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
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elimina
                </button>
            </div>
        </div>
    </div>

    {{-- ^ Modale ^ --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fw-semibold fs-5">
                    Sei sicuro di voler eliminare l'elemento selezionato?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Chiudi</button>
                   <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger btn-sm" type="submit" value="Elimina">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection