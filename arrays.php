<?php 

    $some_nums = [1, 2, 3, 4];
    $some_names = ['vinh', 'bo'];


    // print_r($some_names);

    // echo "this is first element in array: $some_names[0] '<br>'";

    // $colors = [
    //     3 => "red",
    //     4 => "blue",
    //     5 => "green",
    // ];

    // echo $colors[4]. '<br>';

    $hex_colors = [
        "red" => "#FF0000",
        "blue" => "#00FF00",
        "green" => "#0000FF",
    ];

    // echo "hex of blue color is: $hex_colors[blue]";

    $student = [
        'full_name' => "Tang Duc Vinh",
        "age" => 21,
        "email" => "ducvinh100503@gmail.com",
    ];

    // print_r($student);

    $person = [
        $student,
        [
            'full_name' => "Tang Duc Minh",
            "age" => 21,
            "email" => "minh@gmail.com",
        ],
        [
            'full_name' => "Tang Duc Tuan",
            "age" => 21,
            "email" => "tuan@gmail.com",
        ]
    ];

    echo ( json_encode($person));
?>