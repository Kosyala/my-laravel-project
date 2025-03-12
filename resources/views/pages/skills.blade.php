@extends('layouts.app')

@section('content')
    <h1>Welcome to My Portofolio</h1>

    <ul>
        @foreach($skills as $row)
            <li>{{$row->name}} - Description: {{$row->description}}</li>
        @endforeach
    </ul>
@endsection