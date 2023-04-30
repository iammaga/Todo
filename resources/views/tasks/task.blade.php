@extends('layout')

@section('content')
    <h2>Task {{ $task['id'] }}</h2>

    <table>
        <tr>
            <th>Title</th>
            <th>Body</th>
        </tr>
        <tr>
            <td>
                {{ $task['title'] }}
            </td>
            <td>
                <p>{{ $task['body'] }}</p>
            </td>
        </tr>
    </table>
@endsection
