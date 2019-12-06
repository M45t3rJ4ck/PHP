<?php
    if(isset($_POST['submit'])){
        // Start the session:
        session_start();
        // Set session global variable:
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);
        // Redirect to another page:
        header('Location: profile.php');
    };
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>PHP Sessions</title>

    </head>

    <body>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <input type="text" name="name" placeholder="Enter Your Name"/>
            <br>
            <input type="text" name="email" placeholder="Enter Your Email"/>
            <br>
            <input type="submit" name="submit" value="Submit"/>

        </form>

    </body>

</html>