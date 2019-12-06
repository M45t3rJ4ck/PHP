<?php
    // substr() - return portion of a string:
    // Identifing start:
    $output = substr('Hello', 1);
    echo $output;
    echo '<br>';
    // Identifing start and end:
    $output1 = substr('Hello', 1, 3);
    echo $output1;
    echo '<br>';
    // Start from back:
    $output2 = substr('Hello', -2);
    echo $output2;
    echo '<br>';

    // strlen() - return length of string:
    $output3 = strlen('Hello World');
    echo $output3;
    echo '<br>';

    // strpos() - finds position of first occurence of a sub string:
    $output4 = strpos('Hello World', 'o');
    echo $output4;
    echo '<br>';

    // strrpos() - finds position of last occurence of a sub string:
    $output5 = strrpos('Hello World', 'o');
    echo $output5;
    echo '<br>';

    // trim() - strips all whitespaces:
    $output6 = trim('Hello World');
    echo $output6;
    echo '<br>';

    // strtoupper() - makes everthing uppercase:
    $output7 = strtoupper('hello world');
    echo $output7;
    echo '<br>';

    // strtolower() - makes everthing lowercase:
    $output8 = strtolower('HELLO WORLD');
    echo $output8;
    echo '<br>';

    // ucwords() - Capitalize every word:
    $output9 = ucwords('hello world');
    echo $output9;
    echo '<br>';

    // str_replace() - replace all occurences of a search with a replacement:
    $text = 'Hello World';
    $output10 = str_replace('World', 'Everyone', $text);
    echo $output10;
    echo '<br>';

    // is_string() - check if string:
    $val = 'Hello';
    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
    $output11 = is_string($val);
    echo $output11;
    echo '<br>';
    foreach($values as $value){
        if(is_string($value)){
            echo "{$value} is a string";
            echo '<br>';
        };
    };

    // gzcompress() - compress a string:
    $string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis venenatis urna et congue. Aenean quis turpis a ligula aliquet imperdiet. Proin nec sem feugiat, semper lectus eget, sollicitudin turpis. Aliquam vel pellentesque purus, ac porttitor nibh. Phasellus vel tortor sem. Etiam quis sapien mauris. Donec nunc felis, efficitur sed dui ut, finibus fermentum sem. Phasellus lectus urna, porttitor lacinia ex id, pellentesque bibendum ex. Donec in justo eget risus faucibus porttitor. Ut fringilla tellus id rhoncus tincidunt. Donec in ante fringilla est scelerisque maximus. Phasellus ut viverra purus, non tincidunt augue. Sed hendrerit ut risus nec convallis.';
    $compressed = gzcompress($string);
    echo $compressed;
    echo '<br>';
    $original = gzuncompress($compressed);
    echo $original;
    echo '<br>';
?>