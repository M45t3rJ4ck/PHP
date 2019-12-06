<?php
    // GET leaves user details in address bar:
    if(isset($_GET['name'])){
        $name = htmlentities($_GET['name']);
        echo $name;
        echo '<br>';
    };
    if(isset($_GET['email'])){
        $email = htmlentities($_GET['email']);
        echo $email;
        echo '<br>';
    };

    // POST doesn't leave user details in address bar:
    // if(isset($_POST['name'])){
    //     $name = htmlentities($_POST['name']);
    //     echo $name;
    //     echo '<br>';
    // };
    // if(isset($_POST['email'])){
    //     $email = htmlentities($_POST['email']);
    //     echo $email;
    //     echo '<br>';
    // };

    // Will work if form method is GET or POST:
    // if(isset($_REQUEST['name'])){
    //     $name = htmlentities($_REQUEST['name']);
    //     echo $name;
    //     echo '<br>';
    // };
    // if(isset($_REQUEST['email'])){
    //     $email = htmlentities($_REQUEST['email']);
    //     echo $email;
    //     echo '<br>';
    // };

    // Super Global value:
    // echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>My Website</title>

    </head>

    <body>

        <form method="GET" action="getPost.php">

            <div>

                <label>Name</label><br>
                <input type="text" name="name"/>

            </div>

            <div>

                <label>Email</label><br>
                <input type="text" name="email"/>

            </div>

            <input type="submit" value="Submit"/>

        </form>

        <ul>

            <li>

                <a href="getPost.php?name=Riaan">Riaan</a>

            </li>
            <li>

                <a href="getPost.php?name=Willem">Willem</a>

            </li>
            <li>

                <a href="getPost.php?name=Adriaan">Adriaan</a>

            </li>

        </ul>

        <h1><?php echo "{$name}'s Profile"; ?></h1>

    </body>

</html>