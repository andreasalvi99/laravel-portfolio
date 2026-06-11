@extends('layouts.app')
{{-- @dd($types) --}}
@section('content')
    <div class="container form-control mt-5">
        <form action="{{route('types.update', $type->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="my-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="{{$type->nome}}">
            </div>
            <div class="my-3">
                <label for="descrizione" class="form-label">Descrizione</label>
                <input type="text" name="descrizione" class="form-control" id="descrizione" value="{{$type->descrizione}}">
            </div>

            <button class="btn btn-outline-success" type="submit">Invia</button>
        </form>
    </div>
@endsection