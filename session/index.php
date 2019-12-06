<?php
    session_start();
    $name = isset($_SESSION['name']) ? $_SESSION['$name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['$email'] : 'Guest';
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>PHP Sessions</title>

    </head>

    <body>

        <h1>Welcome <?php echo $name; ?></h1>

        <a href="form.php">Log In</a>

    </body>

</html>