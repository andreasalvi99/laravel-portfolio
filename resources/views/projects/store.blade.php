@extends('layouts.app')

@section('content')
    <div class="container form-control mt-5">
        <form action="{{route('projects.store')}}" method="POST" class="p-2">
            @csrf
            <div class="my-3">
                <label for="nome" class="form-label">Nome progetto</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="my-3">
                <label for="cliente" class="form-label">Cliente</label>
                <input type="text" name="cliente" id="cliente" class="form-control">
            </div>
            <div class="my-3">
                <label for="periodo" class="form-label">Periodo</label>
                <input type="text" name="periodo" id="periodo" class="form-control">
            </div>
            <div class="my-3">
                <label for="type_id" class="form-label">Categoria</label>
                <select name="type_id" id="type_id" class="form-control">
                    @foreach ($types as $type)
                        <option value="{{$type->id}}">
                            {{$type->nome}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="my-3">
                <label for="riassunto" class="form-label">Riassunto</label>
                <textarea name="riassunto" id="riassunto" class="form-control" rows="5"></textarea>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-success" type="submit">Invia</button>
            </div>
        </form>
    </div>
@endsection