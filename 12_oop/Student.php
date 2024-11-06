<?php

class Student extends Person
{
    public string $studentId;

    public function __construct($name, $surname, $studentId){
        $this-> age=18;
        $this-> studentId = $studentId;
        parent::__construct($name, $surname);
    }
}