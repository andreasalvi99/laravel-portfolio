@extends('layouts.app')

@section('content')
    <div class="container form-control mt-5">
        <form action="{{route('technologies.update', $technology->id)}}" method="POST">
            @csrf
            @method('PUT')
           <div class="my-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="">
            </div>
            <div class="my-3">
                <label for="colore" class="form-label">Colore</label>
                <input type="color" name="colore" class="form-control form-control-color" id="colore" value="#b584f0">
            </div>
            <div class="my-3">
                <label for="descrizione" class="form-label">Descrizione</label>
                <textarea name="descrizione" id="descrizione" class="form-control" rows="5"></textarea>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-outline-success" type="submit">Invia</button>
            </div>
        </form>
    </div>
@endsection