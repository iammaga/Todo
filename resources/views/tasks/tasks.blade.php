@extends('layout')

@section('content')
    <h2>Tasks List</h2>

    <table>
        <tr>
            <th>Title</th>
            <th>Body</th>
        </tr>
        @foreach ($tasks as $task)
            <tr>
                <td>
                    <a href="/tasks/{{ $task['id'] }}">{{ $task['title'] }}</a>
                </td>
                <td>
                    <p>{{ $task['body'] }}</p>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
