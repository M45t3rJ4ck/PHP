<?php
    $path = '/dir1/myFile.php';
    $file = 'file1.txt';

    // Return filename:
    echo basename($path);
    echo '<br>';

    // Return filename without extention:
    echo basename($path, '.php');
    echo '<br>';

    // Return directory name from the path:
    echo dirname($path);
    echo '<br>';

    // Check if file exists - will return true even if folder:
    echo file_exists($file);
    echo '<br>';
    echo file_exists('test');
    echo '<br>';

    // Get absolute path:
    echo realpath($file);
    echo '<br>';

    // Check to see if file is a file:
    echo is_file($file);
    echo '<br>';

    // Check if file is writeable:
    echo is_writeable($file);
    echo '<br>';

    // Check if file is readable:
    echo is_readable($file);
    echo '<br>';

    // Get file size:
    echo filesize($file);
    echo '<br>';

    // Create a directory:
    mkdir('testing');

    // Delete a directory if no files inside:
    rmdir('testing');

    // Copy a file:
    echo copy('file1.txt', 'file2.txt');
    echo '<br>';

    // Rename a file:
    rename('file2.txt', 'myFile.txt');

    // Delete a file:
    unlink('myFile.txt');

    // Read file content and output to screen:
    echo file_get_contents($file);
    echo '<br>';

    // Write string to file - replaces contents within file:
    echo file_put_contents($file, 'Goodbye World');
    echo '<br>';

    // Append to file:
    $current = file_get_contents($file);
    $current .= ' But why?';
    file_put_contents($file, $current);

    // Put file into handle and run continues functions on handle:
        // 1) Open file for reading:
        $handle = fopen($file, 'r');
        // 2) Read data from file:
        $data = fread($handle, filesize($file));
        echo $data;
        echo '<br>';
        fclose($handle);

    // Write to file using handle:
        // 1) Open file for writing:
        $handle = fopen($file, 'w');
        // 2) Create content for writing:
        $txt = 'Hello World';
        // 3) Write to file:
        fwrite($handle, $txt);
        $txt = "\n" . 'Goodbye World';
        fwrite($handle, $txt);
        // 4) Close file when done:
        fclose($handle);
?>