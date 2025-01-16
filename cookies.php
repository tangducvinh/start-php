<?php 
    // echo "<h1>This is page talk about cookies</h1>";


    setcookie("name", "vinh ne", expires_or_options: time() + 3600);

    echo "Cookie has been set!", "<br>";

    echo "Value name in cookie is: ", $_COOKIE['name'] ?? "";

?>

