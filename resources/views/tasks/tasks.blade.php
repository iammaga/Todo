@extends('layout')

@section('content')
    <table class="w-full">
        <tr class="table-auto text-gray-500 text-xl">
            <th class="text-start pl-8 font-bold text-2xl">#</th>
            <th class="text-start pl-8 font-bold text-2xl">Title</th>
            <th class="text-start pl-8 font-bold text-2xl">Date</th>
        </tr>
        @foreach ($tasks as $task)
            <tr class="text-xl border border-spacing-2 border-gray-500 p-2">
                <td class="border border-spacing-2 border-gray-500 p-4 text-center text-2xl font-bold">
                    <a href="/tasks/{{ $task['id'] }}">{{ $task['id'] }}</a>
                </td>
                <td class="border border-spacing-2 border-gray-500 py-4 px-8 text-2xl font-bold">
                    <a href="/tasks/{{ $task['id'] }}">
                        <p>{{ $task['body'] }}</p>
                    </a>
                </td>
                <td class="border border-spacing-2 border-gray-500 p-4 text-center">
                    <a href="/tasks/{{ $task['id'] }}">
                        <p>{{ $task['created_at'] }}</p>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
