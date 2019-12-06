<?php
    $user = ['name' => 'Jack Smoke', 'email' => 'jsmoke@fluffy.com', 'age' => 69];

    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE['user']);
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>PHP Cookies</title>

    </head>

    <body>

        <h3>Here you, <?php echo $user['name']; ?> can chat to your harts content.</h3>

    </body>

</html>