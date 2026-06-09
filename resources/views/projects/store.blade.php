@extends('layouts.app')

@section('content')
    <div class="container form-control">
        <form action="">
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
                <label for="riassunto" class="form-label">Riassunto</label>
                <input type="text" name="riassunto" id="riassunto" class="form-control">
            </div>
    
            <button class="btn btn-outline-success">Invia</button>
        </form>
    </div>
@endsection