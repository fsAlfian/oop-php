<?php

class Person
{
    var  String $name, $adress, $country, $city = "Jakarta";
    // prop can null if you want
    var ?String $gender = null;

    function sayHello(string $name){
        echo "Hello $name" . PHP_EOL;
    }
}