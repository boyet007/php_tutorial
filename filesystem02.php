<?php 
    $file = 'readme.txt';

    //opening a file for reading
    $handle = fopen($file, 'r+');

    //read the file
    //echo fread($handle, filesize($file));

    //read a single line
    echo fgets($handle);
    echo fgets($handle);

    //read a single character
    //echo fgetc($handle);
    
    //writing to a file
    fwrite($handle, "Everyting popular is wrong");

    fclose($handle);

    //hapus file
    unlink($file);
    ?>