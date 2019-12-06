<?php
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>PHP Session</title>

    </head>

    <body>

        <h4>Thank you <?php echo $name; ?></h4>
        <h5>You have subscribed with the email <?php echo $email; ?></h5>

        <a href="index.php">Go Home</a>
        <br>
        <a href="loggedOut.php">Log Out</a>

    </body>

</html>