<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
</head>

<body>
    @extends('layout')

    @section('content')
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

</body>

</html>
