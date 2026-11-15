@extends('layout')

@section('content')
<table border="0" style="width:800px; margin:50px;">
    <tr>
        <td><img src="{{ url('img/student.jpg') }}" width="175" height="175"></td>
        <td><img src="{{ url('img/teacher.png') }}" width="175" height="175"></td>
    </tr>
    <tr>
        <td><img src="{{ url('img/library.png') }}" width="175" height="175"></td>
        <td><img src="{{ url('img/administrator.png') }}" width="175" height="175"></td>
    </tr>
</table>
@endsection