<?php

$arrays = array(
    1,
    2,
    3,
    4,
    5
);

$numbers = [
    11,
    12,
    13,
    14,
    15
];

$associative = [
    [
        'first_name' => 'Daniel',
        'last_name' => 'Curran',
        'email' => 'email@email.com',
        'phone' => '210-210-2100'
    ]
];

$test = [
    [
        'first_name' => 'Daniel',
        'last_name' => 'Curran',
        'email' => 'email@email.com',
        'phone' => '210-210-2100'
    ],
    [
        'first_name' => 'Jacob',
        'last_name' => 'Sandoval',
        'email' => 'email@email.com',
        'phone' => '210-210-2100'
    ],
    [
        'first_name' => 'Dustin',
        'last_name' => 'Crabtree',
        'email' => 'email@email.com',
        'phone' => '210-210-2100'
    ]
];

var_dump($test);
print_r($test);
echo $test[2]['first_name'] . ' ' . $test[2]['last_name'] . PHP_EOL;
echo "Hello there {$test[1]['first_name']}" . PHP_EOL;
// echo $arrays[3] . PHP_EOL;
// var_dump($arrays);
// print_r($arrays);
// var_dump($numbers);
// print_r($numbers);
?>
