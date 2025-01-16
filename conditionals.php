<?php 
    echo "This is page's conditionals <br>";

    $age = 30;

    // if ($age > 18) {
    //     echo "you are greater than 18 years old";
    // } else {
    //     echo "you are so young <br>";
    // }

    // $date_time = date("H");

    // if ($date_time < 12) {
    //     echo "Good morning";
    // } else if ($date_time >= 12 && $date_time <= 17) {
    //     echo "Good afternoon";
    // } else {
    //     echo "Good evening";
    // }

    // $comment = ["hi", 'hello', 'kkk'];

    // echo empty($comment) ? "No comment" : "Have some comment <br>";

    // echo "This is comment fourth is: ", $comment[4] ?? "No comment 4";

    $favorite_color = 'blue';

    switch($favorite_color) {
        case 'red':
            echo "you choose red";
            break;
        case "blue":  
            echo "you choose blue";
            break;
        case "green":
            echo "you choose green";
            break;
        default:
            echo "not red, green, blue";
    }


?>