<?

//PARAMETERIZED functions
function greet($name)
{
    print("Hello $name , Welcome!!");
}

function add($num1, $num2)
{
    return $num1 + $num2;
}

//GLOBAL VARIABLES
$nam = 15;
global $nam;

function increment()
{
    print("Incremented value:");
}

//CONSTANTS

define("MIN_VALUE", 0);
print("The constant value of Min is: " . constant("MIN_VALUE"));



//TESTING FUNCTIONS

greet("Lionel");
print("\n5 + 3 = " . add(5, 3));

?>