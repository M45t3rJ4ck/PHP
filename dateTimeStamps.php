<!-- Date Time Stamp
    Date parameters:
    1) d = day
    2) m = month
    3) Y = year
    4) l = dat of week
    5) h = hours
    6) i = minutes
    7) s = seconds
    8) a = AM or PM
    9) date_default_timezone_set('Africa/Johannesburg') = Retrive correct timezone
    10) mktime = make date time stamp (measured from January 1 1970 00:00:00 GMT)
    11) strtotime = Takes in string and output date time
-->
<?php
    // Using parameters:
    echo date('d');
    echo '<br>';
    echo date('m');
    echo '<br>';
    echo date('Y');
    echo '<br>';
    echo date('l');
    echo '<br>';
    echo date('l d/m/Y');
    echo '<br>';
    echo date('h');
    echo '<br>';
    echo date('i');
    echo '<br>';
    echo date('s');
    echo '<br>';
    echo date('a');
    echo '<br>';
    date_default_timezone_set('Africa/Johannesburg');
    echo '<br>';
    echo date('h:i:sa');
    echo '<br>';

    // Create specific date and time
    $timestamp = mktime(14, 10, 35, 5, 27, 1983);
    echo $timestamp;
    echo'<br>';
    echo date('h:i:sa', $timestamp);
    echo'<br>';
    echo date('m/d/Y', $timestamp);
    echo'<br>';

    // String to time
    $timestamp2 = strtotime('11:45am December 6 2019');
    echo $timestamp2;
    echo'<br>';
    echo date('h:i:sa m/d/Y', $timestamp2);
    echo'<br>';
    $timestamp3 = strtotime('tomorrow');
    echo $timestamp3;
    echo'<br>';
    echo date('h:i:sa m/d/Y', $timestamp3);
    echo'<br>';
    $timestamp4 = strtotime('next Sunday');
    echo $timestamp4;
    echo'<br>';
    echo date('h:i:sa m/d/Y', $timestamp4);
    echo'<br>';
    $timestamp5 = strtotime('+2 Months');
    echo $timestamp5;
    echo'<br>';
    echo date('h:i:sa m/d/Y', $timestamp5);
    echo'<br>';
?>