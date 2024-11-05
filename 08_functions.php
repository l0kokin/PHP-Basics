<?php

// Function which prints "Hello I am Zura"
function hello($name)
{
    echo "Hello I am $name";
}

hello('Sali');
hello('Nutsa').'<br>';

// Function with argument

// Create sum of two functions
//function sum($a, $b){
//    return $a + $b;
//}
//echo sum(3,4);

// Create function to sum all numbers using ...$nums
function sum(...$nums){
    $sum = 0;

    foreach($nums as $num){
        $sum += $num;
    }
    return $sum;
}
echo sum(1,2,3,4,5,6);

// Arrow functions
