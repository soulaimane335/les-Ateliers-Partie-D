@extends('layout')

@section('content')
    <h2>This is my View !</h2>
    <h3>Welcome {{ $name }}</h3>
    <p>Vous avez {{ $age }} ans</p>
@endsection