<?php 
    echo "This is page talk about read file <br>";

    $file_path = './fruits.txt';

    if (file_exists($file_path)) {
        echo readFile($file_path);
        $file_handle = fopen($file_path, "r");

        $file_content = fread($file_handle, filesize($file_path));

        fclose($file_handle);

        echo $file_content;

    } else {
        $file_handle = fopen($file_path, "w");
        $file_content = 'banana'. PHP_EOL. 'mango'.PHP_EOL.'grape';

        fwrite($file_handle, $file_content);
        fclose($file_handle);
    }
?>