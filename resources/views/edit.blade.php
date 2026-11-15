@extends('layout')

@section('content')
<h3> Edit Student </h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-2">
        <label for="name">Name: </label>
        <input type="text" class="form-control" name="name" value="{{ $student->name }}" required />
    </div>
    <div class="form-group mb-2">
        <label for="email">Email: </label>
        <input type="email" class="form-control" name="email" value="{{ $student->email }}" required />
    </div>
    <div class="form-group mb-2">
        <label for="phone">Phone: </label>
        <input type="text" class="form-control" name="phone" value="{{ $student->phone }}" required />
    </div>
    <div class="form-group mb-2">
        <label for="section">Section: </label>
        <input type="text" class="form-control" name="section" value="{{ $student->section }}" required />
    </div>
    <div class="form-group mb-3">
        <label for="image">Image (laisser vide pour conserver l'actuelle) : </label>
        <input type="file" class="form-control" name="image" />
        <br>
        <img src="/image/{{ $student->image }}" width="96" height="96" />
    </div>
    <button type="submit" class="btn btn-primary"> Update Student </button>
</form>
@endsection