<?php 
    echo "This is page talk about funtions <br>";


    function sayHello($name): void {
        echo "Hello $name";
    }

    // sayHello("vinh ne");

    function sum($a, $b) {
        return $a + $b;
    }


    $multiply = function ($a, $b) {
        return $a * $b;
    };

    // echo $multiply(3, 4);

    // $substract = fn($a, $b) => $a - $b;

    // echo $substract(10, 8);

    $names = ['john', 'anna', 'hoang', 'tony'];

    // count
    // echo count($names);

    // in_array
    // echo var_dump(in_array('jsohn', $names));

    // insert in item
    // array_push($names, "vinh", "ne");
    // array_unshift($names, "first");

    // $chunk_array = array_chunk($names, 2);

    // print_r($chunk_array);

    // $array_one = [1, 2, 3];
    // $array_two = [4, 5, 6];

    // $new_array = array_merge($array_one, $array_two);

    // // spread operator
    // $array_three = [...$new_array];


    // $a = ['name', 'age', 'email'];
    // $b = ['Hoang', '21', 'ducvinh100503@gmail.com'];
    // $c = array_combine($a, $b);

    $numbers = range(0, 10);

    $mutiple = fn($a) => $a * $a;

    $squared_numbers = array_map($mutiple, $numbers);

    $filtered_numbers = array_filter($squared_numbers, fn($num) => $num % 2 == 0);

    print_r($filtered_numbers);
?>