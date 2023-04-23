@extends('layout')

@section('content')
    <table style="width: 100%; border: 1px solid black">
        <tr>
            <th style="border: 1px solid black">Name</th>
            <th style="border: 1px solid black">Email</th>
            <th style="border: 1px solid black">Joined</th>
        </tr>
        <tr>
            <td style="border: 1px solid black">
                <p>
                    {{ $user['name'] }}
                </p>
            </td>
            <td style="border: 1px solid black">
                <p>
                    {{ $user['email'] }}
                </p>
            </td>
            <td style="border: 1px solid black">
                <p>
                    {{ $user['created_at'] }}
                </p>
            </td>
        </tr>
    </table>
@endsection
