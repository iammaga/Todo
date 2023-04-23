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
</body>

</html>
