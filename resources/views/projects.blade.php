@extends('layouts.app')
{{-- @dd($projects) --}}
@section('content')
    <div class="container mt-5">
        @foreach ($projects as $project )
            <div class="card w-75 mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{$project->nome}}</h5>
                        <p class="card-text">{{$project->periodo}}</p>
                    </div>
                    <p class="card-text">{{$project->cliente}}</p>
                    <a href="{{ route('projects.show', $project)}}" class="btn btn-primary">More</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection