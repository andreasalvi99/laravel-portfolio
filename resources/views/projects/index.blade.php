@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a href="{{route('projects.create')}}">
            <button class="btn btn-outline-primary my-3"><i class="bi bi-plus-lg"></i></button>
        </a>
        <div class="row row-cols-3">
            @foreach ($projects as $project )
                <div class="col">
                    <div class="card border-dark mb-3 h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <h5 class="card-title">{{$project->nome}}</h5>
                                <p class="card-text"><i>{{$project->periodo}}</i></p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-column justify-content-center gap-2">
                                    <p class="card-text m-0">{{$project->cliente}}</p>

                                        @if ($project->type)
                                            <p class="card-text m-0">{{$project->type->nome}}</p>    
                                        @else
                                            <p class="card-text m-0">-</p>
                                        @endif
                                </div>
                                <div class="d-flex flex-column gap-2 justify-content-center">
                                    <a href="{{route('projects.edit', $project->id)}}">
                                        <button class="btn btn-outline-warning btn-sm">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </div>
                            </div>
                            <a href="{{ route('projects.show', $project)}}" class="btn btn-outline-dark mt-3">More</a>
                        </div>
                    </div>
                </div>
            @endforeach
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
                    Sei sicuro di voler elimiare l'elemento selezionato?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Chiudi</button>
                    <form action="{{route('projects.destroy', $project->id)}}", method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger btn-sm" type="submit" value="Elimina">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection