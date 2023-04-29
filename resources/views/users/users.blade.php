@extends('layout')

@section('content')
    <h2>Users List</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>
                    <a href="/users/{{ $user['id'] }}">
                        <h3>{{ $user['name'] }}</h3>
                    </a>
                </td>
                <td>
                    <p>
                        {{ $user['email'] }}
                    </p>
                </td>
                <td>
                    <p>
                        {{ $user['password'] }}
                    </p>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
