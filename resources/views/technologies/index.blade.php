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
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge rounded-pill" style="background-color: {{$technology->colore}}">{{$technology->nome}}</span>
                                    <button type="button" class="btn btn-outline dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="bi bi-trash3-fill" style="color: {{$technology->colore}}"></i>
                                    </button>

                                    {{-- <form action="{{route('technologies.destroy', $technology->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-dark" type="submit">
                                            <i class="bi bi-trash3-fill" style="color: {{$technology->colore}}"></i>
                                        </button>
                                    </form> --}}
                                </div>
                                
                            </small>
                        </div>
                        <div class="card-body" style="color: {{$technology->colore}}">
                            <h5 class="card-title">{{$technology->nome}}</h5>
                            <p class="card-text">{{$technology->descrizione}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('technologies.edit', $technology->id)}}" class=" text-decoration-none text-dark">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-outline-dark">Modifica</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- ^ Modale ^ --}}

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fs-4 fw-semibold">
                    Sei sicuro di voler eliminare l'elemento selezionato?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <form action="{{route('technologies.destroy', $technology->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">
                           Elimina
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection