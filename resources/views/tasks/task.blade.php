@extends('layout')

@section('content')
    <h2>{{ $task['title'] }}</h2>
    <p>{{ $task['body'] }}</p>
@endsection
