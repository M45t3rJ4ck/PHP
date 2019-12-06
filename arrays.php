<!-- Array:
Array Rules:
1) Can hold multiple values
2) Are zero based when indexing
Array Types:
1) Indexed
2) Associative
3) Multi-dimensional -->
<?php
    // Indexed - easiest type (probably most common):
    # Idenitfy variable:
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    # To add to indexed array:
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';
    # Accessing variable:
    echo $people[0];
    echo '<br>';
    echo $ids[2];
    echo '<br>';
    echo $cars[4];
    echo '<br>';
    # To count every item in length of array:
    echo count($cars);
    echo '<br>';
    # To print every item in length of array:
    print_r($cars);
    echo '<br>';
    # To check data type for every item in array:
    var_dump($cars);
    echo '<br>';
?>
<?php
    // Associative - allows you to define key and value:
    $person = array('Jack' => 66, 'Scruge' => 83, 'Santa' => 255);
    $ids = [101 => 'Delmations', 3 => 'Little Pigs', 7 => 'Dwarfs'];
    # To add to associative array:
    $person['Mickey'] = 75;
    echo $person['Santa'];
    echo '<br>';
    echo $ids[101];
    echo '<br>';
    echo $person['Mickey'];
    echo '<br>';
    print_r($person);
    echo '<br>';
    var_dump($person);
    echo '<br>';
?>
<?php
    // Multi-dimensional - array within another array:
    $bikes = array(
        array('Honda', 20, 10),
        array('Suzuki', 30, 5),
        array('Kawasaki', 25, 7)
    );
    echo $bikes[1][0];
?>