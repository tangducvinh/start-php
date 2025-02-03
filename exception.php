<?php 
    echo "This is page talk about exception in php. <br>";

    function divide($a, $b) {
        if (!$b) {
            throw new Exception("Cannot divide by zero". '<br>');
        }

        return $a / $b;
    }

    try {
        echo divide(10, 2);
        echo divide(5, 0);
        echo "no errors";
    } catch(Exception $e) {
        echo "Caught exception: ", $e->getMessage(), "\n";
    } finally {
        echo "Finally come here...". "<br>";
    }

    echo "Program runs here...";


?>