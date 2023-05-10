@extends('layout')

@section('content')
    <table class="w-full">
        <tr class="table-auto text-gray-500 text-xl">
            <th class="text-start pl-8 font-bold text-2xl">#</th>
            <th class="text-start pl-8 font-bold text-2xl">Name</th>
            <th class="text-start pl-8 font-bold text-2xl">Email</th>
            <th class="text-start pl-8 font-bold text-2xl">Password</th>
        </tr>
        @foreach ($users as $user)
            <tr class="text-xl border border-spacing-2 border-gray-500 p-2">
                <td class="border border-spacing-2 border-gray-500 p-4 text-center text-2xl font-bold">
                    <a href="/users/{{ $user['id'] }}">
                        <h3>{{ $user['id'] }}</h3>
                    </a>
                </td>
                <td class="border border-spacing-2 border-gray-500 p-4 text-center text-2xl font-bold">
                    <a href="/users/{{ $user['id'] }}">
                        <h3>{{ $user['name'] }}</h3>
                    </a>
                </td>
                <td class="border border-spacing-2 border-gray-500 py-4 px-8 text-2xl font-bold">
                    <a href="/users/{{ $user['id'] }}">
                        <p>
                            {{ $user['email'] }}
                        </p>
                    </a>
                </td>
                <td class="border border-spacing-2 border-gray-500 p-4 text-center">
                    <a href="/users/{{ $user['id'] }}">
                        <p>
                            {{ $user['password'] }}
                        </p>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
