<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User <?php echo $user['id'] ?></title>
</head>

<body>

    <table style="width: 100%; border: 1px solid black">
        <tr>
            <th style="border: 1px solid black">id</th>
            <th style="border: 1px solid black">name</th>
            <th style="border: 1px solid black">email</th>
            <th style="border: 1px solid black">email_verified_at</th>
            <th style="border: 1px solid black">password</th>
            <th style="border: 1px solid black">remember_token</th>
            <th style="border: 1px solid black">created_at</th>
            <th style="border: 1px solid black">updated_at</th>
        </tr>
        <tr>
            <td style="border: 1px solid black">
                <p>
                    <?php echo $user['id'] ?>
                </p>
            </td>
            <td style="border: 1px solid black">
                <p>
                    <?php echo $user['name'] ?>
                </p>
            </td>
            <td style="border: 1px solid black">
                <p>
                    <?php echo $user['email'] ?>
                </p>
            </td>
            <td style="border: 1px solid black">
                <p>
                    <?php echo $user['email_verified_at'] ?>
                </p>
            </td>
            <td style="border: 1px solid black">
                <p>
                    <?php echo $user['password'] ?>
                </p>
            </td>
            <td style="border: 1px solid black">
                <p>
                    <?php echo $user['remember_token'] ?>
                </p>
            </td>
            <td style="border: 1px solid black">
                <p>
                    <?php echo $user['created_at'] ?>
                </p>
            </td>
            <td style="border: 1px solid black">
                <p>
                    <?php echo $user['updated_at'] ?>
                </p>
            </td>
        </tr>
    </table>

</body>

</html>
