<!-- Conditionals - used to test for events or values or comparisons:
    Differnt types of comparison operators:
    1) == -> equals (match value)
    2) != -> not equal (match value)
    3) === -> equals (match value and dat type)
    4) !== -> not equal (match value and dat type)
    5) > -> greater than
    6) >= -> greater or equal to
    7) < -> smaller than
    8) <= -> smaller or equal to
    Differnt types of Logical Operators:
    1) && -> and
    2) || -> or
    3)       xor (exclusive or - one of which should pass and not both)
-->
<?php
    $num = 5;

    // Basic if-elseif-else statements:
    if($num == 5){
        echo '1: 5 passed';
        echo '<br>';
    } elseif($num != 5){
        echo '2: 5 passed';
        echo '<br>';
    } elseif($num === '5'){
        echo '3: 5 passed';
        echo '<br>';
    } elseif($num !== 5){
        echo '4: 5 passed';
        echo '<br>';
    } elseif($num > 5){
        echo '5: 5 passed';
        echo '<br>';
    } elseif($num >= 5){
        echo '6: 5 passed';
        echo '<br>';
    } elseif($num < 5){
        echo '7: 5 passed';
        echo '<br>';
    } elseif($num <= 5){
        echo '8: 5 passed';
        echo '<br>';
    } else{
        echo '5 din\'t pass';
        echo '<br>';
    };

    // Nesting if statements:
    $num1 = 5;
    if($num1 > 4){
        if($num1 < 6){
            echo "$num1 passed";
            echo '<br>';
        };
    };

    // Logical Operator if statement:
    $num2 = 5;
    if($num2 > 4 && $num2 < 10){
        echo "$num2 passed";
        echo '<br>';
    };
    if($num2 > 6 || $num2 < 10){
        echo "$num2 passed";
        echo '<br>';
    };
    if($num2 > 6 xor $num2 < 10){
        echo "$num2 passed";
        echo '<br>';
    };
?>
<?php
    // Switches - test for value based on differnt cases:
    $favColor = 'Black';
    switch($favColor){
        case 'Red':
            echo 'Your favourite colour is red';
            echo '<br>';
            break;
        case 'Blue':
            echo 'Your favourite colour is blue';
            echo '<br>';
            break;
        case 'Green':
            echo 'Your favourite colour is green';
            echo '<br>';
            break;
        default:
            echo "Your favourite colour is $favColor";
            echo '<br>';
            break;
    };
?>