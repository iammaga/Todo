<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>

<body>
    <h2>Users List</h2>

    <table style="width: 100%; border: 1px solid black">
        <tr>
            <th style="border: 1px solid black">Name</th>
            <th style="border: 1px solid black">Email</th>
            <th style="border: 1px solid black">Password</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td style="border: 1px solid black">
                    <a href="/users/<?php echo $user['id'] ?>">
                        <h3><?php echo $user['name'] ?></h3>
                    </a>
                </td>
                <td style="border: 1px solid black">
                    <p>
                        <?php echo $user['email'] ?>
                    </p>
                </td>
                <td style="border: 1px solid black">
                    <p>
                        <?php echo $user['password'] ?>
                    </p>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>
