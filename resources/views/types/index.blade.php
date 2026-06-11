@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a href="{{route('types.create')}}">
            <button class="btn btn-primary my-3">Nuovo</button>
        </a>
        @foreach ($types as $type)
            <div class="card my-3">
                <div class="card-header bg-white">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$type->nome}}</h5>
                        <small class="text-body-secondary">3 days ago</small>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1 align-self-center">{{$type->descrizione}}</p>
                        <div class="d-flex flex-column gap-1">
                            <a href="{{route('types.edit', $type->id)}}">
                                <button class="btn btn-outline-warning btn-sm">Modifica</button>
                            </a>
                            <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Elimina
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- ^ Modale ^ --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fw-semibold fs-5">
                    Sei sicuro di voler eliminare l'elemento selezionato?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Chiudi</button>
                    <form action="{{route('types.destroy', $type->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection