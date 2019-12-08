<?php
    require ('config.php');
    // Create connection to db
    // Parameters:
        // 1) Host
        // 2) User
        // 3) password
        // 4) database name
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if(mysqli_connect_errno()){
        // Connection Failed
        echo 'Failed to connect' . mysqli_connect_errno();
    };
?>