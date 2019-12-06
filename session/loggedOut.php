<?php
    session_start();

    unset($_SESSION['name']);
    unset($_SESSION['email']);

    session_destroy();
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>PHP Sessions</title>

    </head>

    <body>

        <h2>You have been logged out</h2>

        <a href="index.php">Go Home</a>

    </body>

</html>