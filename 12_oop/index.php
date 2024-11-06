<?php

// What is class and instance
require_once 'Person.php';
require_once 'Student.php';

$s = new Student('Brad', 'Traversy', '1234');

echo '<pre>';
var_dump($s);
echo '</pre>';

//$p = new Person('Sali', 'Gogi');
//$p->setAge(27);
//
//echo '<pre>';
//var_dump($p);
//echo '</pre>';
//
//echo Person::getCounter();


// Create Person class in Person.php

// Create instance of Person

// Using setter and getter