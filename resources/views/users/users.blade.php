@extends('layout')

@section('content')
    <h2>Users List</h2>

    <table style="width: 100%; border: 1px solid black">
        <tr>
            <th style="border: 1px solid black">Name</th>
            <th style="border: 1px solid black">Email</th>
            <th style="border: 1px solid black">Password</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td style="border: 1px solid black">
                    <a href="/users/{{ $user['id'] }}">
                        <h3>{{ $user['name'] }}</h3>
                    </a>
                </td>
                <td style="border: 1px solid black">
                    <p>
                        {{ $user['email'] }}
                    </p>
                </td>
                <td style="border: 1px solid black">
                    <p>
                        {{ $user['password'] }}
                    </p>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
