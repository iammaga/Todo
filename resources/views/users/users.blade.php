@extends('layout')

@section('content')
    <h2 class="text-3xl font-bold mt-4 pl-2">Users List</h2>

    <table class="border-collapse border border-slate-500 mt-4">
        <tr>
            <th class="border border-slate-600 text-2xl w-1/4 p-2">Name</th>
            <th class="border border-slate-600 text-2xl w-1/4 p-2">Email</th>
            <th class="border border-slate-600 text-2xl w-1/4 p-2">Password</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td class="border border-slate-600 p-2">
                    <a href="/users/{{ $user['id'] }}">
                        <h3>{{ $user['name'] }}</h3>
                    </a>
                </td>
                <td class="border border-slate-600 p-2">
                    <p>
                        {{ $user['email'] }}
                    </p>
                </td>
                <td class="border border-slate-600 p-2">
                    <p>
                        {{ $user['password'] }}
                    </p>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
