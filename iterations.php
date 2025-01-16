<?php 
    echo "This is page's iteration <br>";

    // for ($i = 0; $i < 10; $i++) {
    //     echo $i, " ";
    // }

    // $i = 0;

    // while($i < 20) {
    //     echo $i, " ";
    //     $i++;
    // }

    $fruits = ['apple', 'pineapple', 'orange', 'lemon'];

    // for ($i = 0; $i < count($fruits); $i++) {
    //     echo $fruits[$i], " ";
    // }

    // foreach($fruits as $index => $fruit) {
    //     echo $index + 1, ": ", $fruit, " <br>";
    // } 

    $person = [
        "name" => "Tang Duc Vinh",
        "age" => 21,
        "email" => "ducvinh100503@gmail.com"
    ];

    foreach($person as $key => $value) {
        echo $key, ": ", $value, "<br>";
    }
?>