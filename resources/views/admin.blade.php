@extends('layouts.app')

@section('content')
    <p>{{$user->id}}</p>
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
    <p>{{$user->password}}</p>
@endsection