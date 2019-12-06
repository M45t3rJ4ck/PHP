<?php
    // Different Validation Available:
        // Validate:
            // FILTER_VALIDATE_EMAIL
            // FILTER_VALIDATE_FLOAT
            // FILTER_VALIDATE_INT
            // FILTER_VALIDATE_IP
            // FILTER_VALIDATE_REGEXP
            // FILTER_VALIDATE_URL
            // FILTER_VALIDATE_BOOLEAN
        // Sanitize:
            // FILTER_SANITIZE_EMAIL
            // FILTER_SANITIZE_ENCODED
            // FILTER_SANITIZE_NUMBER_FLOAT
            // FILTER_SANITIZE_NUMBER_INT
            // FILTER_SANITIZE_SPECIAL_CHARS
            // FILTER_SANITIZE_STRING
            // FILTER_SANITIZE_URL

    // Check for posted data:
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'POST Data Found';
        echo '<br>';
    } else {
        echo 'No POST Data Found';
        echo '<br>';
    };
    if(filter_has_var(INPUT_GET, 'data')){
        echo 'GET Data Found';
        echo '<br>';
    } else {
        echo 'No GET Data Found';
        echo '<br>';
    };

    // Validate input data found:
    if(filter_has_var(INPUT_POST, 'data')){
        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
            echo '<br>';
        } else {
            echo 'Email is NOT valid';
            echo '<br>';
        };
    };
    if(filter_has_var(INPUT_GET, 'data')){
        if(filter_input(INPUT_GET, 'data', FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
            echo '<br>';
        } else {
            echo 'Email is NOT valid';
            echo '<br>';
        };
    };

    // Validate input data found:
    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];
        // Sanitize data by removing illegal chars:
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo 'Email entered: ' . $email;
        echo '<br>';
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
            echo '<br>';
        } else {
            echo 'Email is NOT valid';
            echo '<br>';
        };
    };
    if(filter_has_var(INPUT_GET, 'data')){
        $email = $_GET['data'];
        // Sanitize data by removing illegal chars:
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo 'Email entered: ' . $email;
        echo '<br>';
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
            echo '<br>';
        } else {
            echo 'Email is NOT valid';
            echo '<br>';
        };
    };

    // Validate numbers:
    $var = 23;
    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var . ' is a integer.';
        echo '<br>';
    } else {
        echo $var . ' is NOT a integer.';
        echo '<br>';
    };

    // Sanitize numbers:
    $var1 = '3r2jn342lk3k24lnr234l';
    var_dump(filter_var($var1, FILTER_SANITIZE_NUMBER_INT));
    echo '<br>';

    // Sanitize special chars:
    $var2 = '<script>alert(1)</script>';
    echo $var2;
    var_dump(filter_var($var2, FILTER_SANITIZE_SPECIAL_CHARS));
    echo '<br>';

    // Filter var array:
    $arr = array(
        "name" => "jack smoke",
        "age" => "69",
        "email" => "jackSmoke@fluffy.com"
    );
    $filter = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );
    print_r(filter_var_array($arr, $filter));
    echo '<br>';

    // Filter input array:
    $filters = array(
        "data2" => FILTER_VALIDATE_EMAIL,
        "data3" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );
    print_r(filter_input_array(INPUT_POST, $filters));
    echo '<br>';
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input type="text" name="data"/>
    <button type-"submit">Submit POST</button>

</form>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input type="text" name="data2"/>
    <input type="text" name="data3"/>
    <button type-"submit">Submit POST</button>

</form>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input type="text" name="data"/>
    <button type-"submit">Submit GET</button>

</form>