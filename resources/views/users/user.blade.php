@extends('layout')

@section('content')
    <h2>User {{ $user['id'] }}</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Joined</th>
        </tr>
        <tr>
            <td>
                <p>
                    {{ $user['name'] }}
                </p>
            </td>
            <td>
                <p>
                    {{ $user['email'] }}
                </p>
            </td>
            <td>
                <p>
                    {{ $user['created_at'] }}
                </p>
            </td>
        </tr>
    </table>
@endsection
