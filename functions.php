<!-- Function - block of code that can be repeatedly called:
    3 Different types to format code:
        1) Camel Case - myFunction() -> used mostly for functions and some times variables
        2) Lower Case with underscores - my_function() -> used mostly for variables and some times functions
        3) Pascal Case - MyFunction() -> usually used for classes
-->
<?php
    // Creates simple function:
    function simpleFunction(){
        echo 'Hello World!';
        echo '<br>';
    };
    // Run simple function:
    simpleFunction();

    // Include parameters or arguments with function and set default:
    function sayHello($name = 'World'){
        echo "Hello $name!";
        echo '<br>';
    };
    sayHello('Jack Smoke');
    sayHello('Santa Cluass');
    sayHello();

    // Return values from functions - most cases:
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    };
    echo addNumbers(6, 9);
    echo '<br>';

    // Passing arguments by reference:
    $myNum = 10;
    function addTen($myNum){
        $myNum += 10;
    };
    # Will manipulate number:
    function addFive(&$myNum){
        $myNum += 5;
    };
    addTen($myNum);
    echo $myNum;
    echo '<br>';
    addFive($myNum);
    echo $myNum;
    echo '<br>';
?>