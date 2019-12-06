<?php
    // Update cookie:
    // setcookie('username', 'Smoked Jack' , time() + (86400 * 30));

    if(count($_COOKIE) > 0){
        echo 'There are ' . count($_COOKIE) . ' cookies saved.';
        echo '<br>';
    } else {
        echo 'There are no cookies saved';
        echo '<br>';
    };

    // Access data in cookie:
    if(isset($_COOKIE['username'])){
        echo 'User ' . $_COOKIE['username'] . ' is set.';
        echo '<br>';
    } else {
        echo 'User is NOT set.';
        echo '<br>';
    };
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>PHP Cookies</title>

    </head>

    <body>

        <h4>Welcome <?php echo $_COOKIE['username']; ?></h4>

        <a href="index.php">Go Home and Log Out</a>
        <br>
        <a href="chat.php">Chat with the community</a>

    </body>

</html>