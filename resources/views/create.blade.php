@extends('layout')

@section('content')
<h3> Add Student </h3>
<form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
    @csrf
    <div class="form-group mb-2">
        <label for="name">Name: </label>
        <input type="text" class="form-control" name="name" required />
    </div>
    <div class="form-group mb-2">
        <label for="email">Email: </label>
        <input type="email" class="form-control" name="email" required />
    </div>
    <div class="form-group mb-2">
        <label for="phone">Phone: </label>
        <input type="text" class="form-control" name="phone" required />
    </div>
    <div class="form-group mb-2">
        <label for="section">Section: </label>
        <input type="text" class="form-control" name="section" required />
    </div>
    <div class="form-group mb-3">
        <label for="image">Image: </label>
        <input type="file" class="form-control" name="image" required />
    </div>
    <button type="submit" class="btn btn-primary"> Add Student </button>
</form>
@endsection