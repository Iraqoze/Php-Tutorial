<?php

//PHP FUNCTION DEFINITION

function greet()
{
    print("Hello Papi\n");
}

greet();

//Parameterized Functions


function sayHello($name)
{
    print("Hello " . $name);
}

sayHello("Lionel");


//Passing Argument by reference

function addFive(&$number)
{
    $number += 5;
}

print("\n\nPassing argument by reference\n\n");
print("----------------------------------------\n\n");


$originalNumber = 10;

print("\n Original Number: " . $originalNumber);

addFive($originalNumber);

print("\n\nAFTER ADDING 5 We Have: $originalNumber");


//DYNAMIC Function Calls

$function_addFive = "addFive";

$function_addFive($originalNumber);

print("\n\nHapa Inafaa kua Twenty: $originalNumber");



?>

