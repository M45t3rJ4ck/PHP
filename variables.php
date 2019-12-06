hello
<h1>Hello</h1>
<?php
    // echo - prints text to screen (doesn't return value - is faster than print as no value to be returned)
    echo 'Hello World';
?>
<h1><?php
    echo 'Hello World';
?></h1>
<?php
    // print - prints text to screen (returns value of 1 - can be used within expersions)
    print 'Hello World';
?>
<!-- Outside php comment -->
<?php
    // Single line comment inside php
    # Also single line comment inside php
    /*
    Multiline
    comment
    inside
    php
    */
?>
<!-- Create variable to output -->
<?php
    // Variable Rules:
    // 1) Prefix with $ sign - or it will represent constant
    // 2) Has to start with a letter or an underscore
    // 3) Is case sensitive
    $output = 'Hello User!';
    echo $output;
?>
<!-- Data Types -->
<?php
    // Data Types and there Rules:
    // 1) Strings - must be wrapped in single or double quotes
    // 2) Integers - whole numbers can be positive or negative
    // 3) Floats - decimals
    // 4) Booleans - True or Flase values only
    // 5) Arrays - list format
    // 6) Objects - dictionary format
    // 7) NULL - lack of value
    // 8) Resource - reference to a function (not actual data type)
    $num = 4;
    echo $num;
    echo '<br>';
    $float1 = 4.4;
    echo $float1;
    echo '<br>';
    $bool1 = true;
    echo $bool1;
    echo '<br>';
?>
<!-- Concatenate varialbes -->
<?php
    // Strings:
    $string1 = "Hello";
    $string2 = 'world!';
    # To join two strings in php use . and not +
    $greeting1 = $string1 + $string2;
    $greeting2 = $string1 . $string2;
    # To join two strings with whitespace
    $greeting3 = $string1 . ' ' . $string2;
    # To parse variable use double quotes
    $greeting4 = "$string1 $string2";
    echo $greeting1;
    echo '<br>';
    echo $greeting2;
    echo '<br>';
    echo $greeting3;
    echo '<br>';
    echo $greeting4;
    echo '<br>';
    // Escape sequences - remove special meaning php gives a certain character (use single \):
    $string3 = 'Thery\'re Here!';
    echo $string3;
    echo '<br>';
?>
<?php
    // Numbers:
    $num1 = 69;
    $num2 = 96;
    $add_sum = $num1 + $num2;
    $nim_sum = $num1 - $num2;
    $div_sum = $num1 / $num2;
    $mul_sum = $num1 * $num2;
    echo $add_sum;
    echo '<br>';
    echo $nim_sum;
    echo '<br>';
    echo $div_sum;
    echo '<br>';
    echo $mul_sum;
    echo '<br>';
?>
<?php
    // Constants:
    // Rules:
    // 1) Values that can't be changed (server name, IP Address)
    // 2) To be in all uppercase - to change add third parameter of true
    define('GREETING', 'Hello everyone');
    echo GREETING;
    echo '<br>';
    define('GREETINGs', 'Hello everyone', true);
    echo greetings;
?>