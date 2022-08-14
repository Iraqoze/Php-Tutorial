<?php

//NUMERIC ARRAY
$data = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);

//ASSOCIATIVE ARRAY

$students = array(
    "Lio" => 65,
    "Dear" => 15,
    "Jaba" => 12,
    "And" => 10,
    "So-On" => 8
);

print($students['Lio']);

//MULTI DIMENTIONAL ARRAY
$grades = array(
    "Lio" => array(
        "OOP" => 20,
        "DSA" => 20    ),    

        "Nel" => array(
        "OOP" => 19,
        "DSA" => 18    )

);

print($grades['Lio']['DSA'])


?>
