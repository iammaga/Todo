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
        <h2>{{ $task['title'] }}</h2>
        <p>{{ $task['body'] }}</p>
    @endsection
</body>

</html>
