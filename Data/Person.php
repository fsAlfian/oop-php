<?php

class Person
{
    const Author = "Alfian";
    var  String $name, $adress, $country, $city = "Jakarta";
    // prop can null if you want
    var ?String $gender = null;

    function __construct(string $name, string $adress, string $country) {
        $this->name = $name;
        $this->adress = $adress;
        $this->country = $country;
    }

    function sayHello(?string $name){
        if(is_null($name)){
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info () {
        echo "Author : " . self::Author . PHP_EOL;
    }

    
}