<?php

// Create array
$fruits = ['Banana', "Apple", 'Cherry'];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[2];

// Set element by index
$fruits[2] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]); //true
isset($fruits[12]); //false

// Append element
$fruits[] = 'Pineapple';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array

// Add element at the end of the array

// Remove element from the end of the array

// Add element at the beginning of the array

// Remove element from the beginning of the array

// Split the string into an array

// Combine array elements into string

// Check if element exist in the array

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Sali',
    'surname' => 'Gogishvili',
    'age' => 27,
    'hobbies' => ['Pottery', 'Skiing', 'TV shows']
];

// Get element by key
echo $person['name'] . '<br>';

// Set element by key
$person['friends'] = ['Tako', 'Nutsa'];

echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
//if(isset($person['address'])){
//    $person['address'] = 'unknown';
//}

$person['address'] ??= 'unknown';

echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays
$todos = [
    ['title'=> 'Todo title 1', 'completed'=> true],
    ['title'=> 'Todo title 2', 'completed'=> true],
    ['title'=> 'Todo title 3', 'completed'=> false],
];

echo '<pre>';
var_dump($todos);
echo '</pre>';