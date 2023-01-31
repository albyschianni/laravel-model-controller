@extends('layouts.main-layout')

@section('content')
    <h1>TEST MOVIES</h1>
    <div> 
        <ul>
            @foreach ($movies as $movie)
            <li>{{$movie ['title'] }} - {{$movie ['vote'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection