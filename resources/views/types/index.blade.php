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
                            <form action="{{route('types.destroy', $type->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection