<!-- Loops - execute a block of code a set number of times:
Loop Types:
1) For
2) While
3) Do..While
4) Foreach
-->
<?php
    // For Loop - usually used if you know number of times to be executed:
    // Parameters:
    // 1) initializer
    // 2) condition
    // 3) increment
    for($i = 0; $i <= 10; $i++){
        echo 'Number: ' . $i;
        echo '<br>';
    };
?>
<?php
    // While Loop - usually used if you not known number of times to be executed:
    // Parameters:
    // 1) condition
    $j = 20;
    while($j < 30){
        echo 'Number: ' . $j;
        echo '<br>';
        $j++;
    };
?>
<?php
    // Do..While Loop - always going to run at least once:
    // Parameters:
    // 1) condition
    $x = 40;
    do{
        echo 'Number: ' . $x;
        echo '<br>';
        $x++;
    }
    while($x < 50);
?>
<?php
    // Foreach - meant to work with arrays:
    // Parameters:
    // 1) name of array
    // 2) variable of singular for item in array
    // 3) value (if working with associative arrays)
    # Indexed array:
    $people = array('Santa', 'Mickey', 'Snoopy', 'TinTin', 'Gringe');
    foreach($people as $person){
        echo $person;
        echo '<br>';
    };
    # Associative array:
    $bikes = array('Honda' => 900, 'Suzuki' => 750, 'Ducati' => 999);
    foreach($bikes as $bike => $cc){
        echo $bike . ': ' . $cc;
        echo '<br>';
    };
?>