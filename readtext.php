<?php 
    //file system part 1
    //$file = readfile('./readme.txt');
    
    $file = 'readme.txt';
    //echo $quotes;

    if(file_exists($file)) {
        //read file
        echo readfile($file) . '<br />';

        //copy file
        copy($file, 'quotes.txt');

        //absolute path
        echo realpath($file) . '<br />';

        //file size
        echo filesize($file) . '<br />';

        //rename file
        //rename($file, 'test.txt');

        //make directory
        mkdir('quotes');
    } else {
        echo 'file does not existsss';
    }
?>