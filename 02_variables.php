<?php

// What is a variable

// Variable types
/* String, Integer, Float, Boolean, Null, Array, Object, Resource*/

// Declare variables
$name = 'Sali'; //string
$age = 27; //integer
$isMale = true; //boolean - converted to 1/0 when printed
$height = 1.85; //float/double
$salary = null; //null - converted to empty string when printed

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';

// Print types of the variables
echo gettype($age) . '<br>';

// Print the whole variable
echo var_dump($name) . '<br>';

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name) . '<br>';

// Variable checking functions
is_string($name); //true
is_double($height); //true
is_bool($salary); //false

// Check if variable is defined
isset($name); //true
isset($address); //false

// Constants
define('PI', 3.14);
echo PI.'<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';