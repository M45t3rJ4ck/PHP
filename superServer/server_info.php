<?php
    // $_SERVER SUPERGLOBALS

    // Create server array - associative
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Http Header' => $_SERVER['HTTP_HOST'],
        'Server Software'  => $_SERVER['SERVER_SOFTWARE'],
        'Document Root'    => $_SERVER['DOCUMENT_ROOT'],
        'Current Page'     => $_SERVER['PHP_SELF'],
        'Script Name'      => $_SERVER['SCRIPT_NAME'],
        'Absolute Path'    => $_SERVER['SCRIPT_FILENAME']
    ];
    echo 'Server Array Information:';
    echo '<br>';
    echo $server['Host Server Name'];
    echo '<br>';
    echo $server['Host Http Header'];
    echo '<br>';
    echo $server['Server Software'];
    echo '<br>';
    echo $server['Document Root'];
    echo '<br>';
    echo $server['Current Page'];
    echo '<br>';
    echo $server['Script Name'];
    echo '<br>';
    echo $server['Absolute Path'];
    echo '<br>';

    // Create client array
    $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP Address'  => $_SERVER['REMOTE_ADDR'],
        'Client Remote Port' => $_SERVER['REMOTE_PORT']
    ];
    echo 'Client Array Information:';
    echo '<br>';
    echo $client['Client System Info'];
    echo '<br>';
    echo $client['Client IP Address'];
    echo '<br>';
    echo $client['Client Remote Port'];
    echo '<br>';
?>