<!DOCTYPE html>
<h1>Hello World</h1>



<?php 

$globalName = "Zoe";

function sayHello() {
    $localName = "Harry";
    echo "Hello, $localName!<br>";

    global $globalName;
    echo "Hello, $globalName!<br>";
}

sayHello();

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

$hello = "Hello world!";
echo strpos("I love soccer", "soccer");
echo strrev("Hello world!");



$var = '122.34343The';
$float_value_of_var = floatval($var);
echo $float_value_of_var ."<br>" ;

echo (int) ( (0.1+0.7) * 10);

$var = NULL;

class karate
{
    function do_karate()
    {
        echo "Doing karate.";
    }
}

$bar = new karate;
$bar->do_karate();

?>