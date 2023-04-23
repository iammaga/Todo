<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of tasks</title>
</head>

<body>
    @foreach ($tasks as $task)
        <h2><a href="/tasks/{{ $task['id'] }}">{{ $task['title'] }}</a></h2>
        {{ $task['body'] }}
    @endforeach
</body>

</html>