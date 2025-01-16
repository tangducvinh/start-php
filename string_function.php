<?php 
    echo "<h1>This is page talk about string functions</h1>";

    $name = "Tang Duc Vinh";

    echo "Length of name is: ", strlen($name), "<br>";

    echo "Reverse name is: ", strrev($name), "<br>";

    echo "Lower case name is: ", strtolower($name), "<br>";

    echo "Upper case name is: ", strtoupper($name), "<br>";

    echo "Replace name is: ", str_replace(" ", "-", $name), "<br>";

    echo "The first letter of name is Tang: ", str_starts_with($name, "Tang") == 1 ? "true" : "false", "<br>";

    echo "The end letter of name is Vinh: ", str_ends_with($name, "Vinh") == 1 ? "true" : "false", "<br>";

    echo "Ignore the html string: ", htmlspecialchars("<h1>Hello world</h1>"), "<br>";



?>