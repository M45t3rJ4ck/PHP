<?php
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        // To start cookie:
        // Parameters:
        // 1) Name of cookie
        // 2) Value of cookie
        // 3) Expiration of cookie
        setcookie('username', $username, time()+3600); # Set to expire in 1 hour

        // Relocte to next page:
        header('Location: profile.php');
    };
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>PHP Cookies</title>

    </head>

    <body>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <input type="text" name="username" placeholder="Enter Username"/>
            <input type="submit" name="submit" value="Submit"/>

        </form>

    </body>

</html>