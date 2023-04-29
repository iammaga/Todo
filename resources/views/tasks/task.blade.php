@extends('layout')

@section('content')
    <h2 class="text-3xl font-bold mt-4 pl-2">Task {{ $task['id'] }}</h2>

    <table class="border-collapse border border-slate-500 mt-4">
        <tr>
            <th class="border border-slate-600 text-2xl w-1/4 p-2">Title</th>
            <th class="border border-slate-600 text-2xl w-1/4 p-2">Body</th>
        </tr>
        <tr>
            <td class="border border-slate-600 p-2">
                <a href="/tasks/{{ $task['id'] }}">{{ $task['title'] }}</a>
            </td>
            <td class="border border-slate-600 p-2">
                <p>{{ $task['body'] }}</p>
            </td>
        </tr>
    </table>
@endsection
