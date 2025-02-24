@extends('layouts.app')

@section('content')
    <h1>Welcome to My Portofolio</h1>

    <ul>
        @foreach($home as $row)
            <li>{{$row->name}} - Age: {{$row->age}}</li>
        @endforeach
    </ul>
@endsection