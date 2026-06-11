@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @foreach ($types as $type)
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$type->nome}}</h5>
                        <small class="text-body-secondary">3 days ago</small>
                    </div>
                    <p class="mb-1">{{$type->descrizione}}</p>
                </a>
            </div>
        @endforeach
    </div>
@endsection