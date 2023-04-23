@extends('layout')

@section('content')
    @foreach ($tasks as $task)
        <h2><a href="/tasks/{{ $task['id'] }}">{{ $task['title'] }}</a></h2>
        {{ $task['body'] }}
    @endforeach
@endsection
