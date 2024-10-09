<?php

require_once "Data/Person.php";

$person = new Person("Alfian", "Jakarta", "Indonesia");

var_dump($person);

echo "Name : " . $person->name . PHP_EOL;
echo "Adress : " . $person->adress . PHP_EOL;
echo "Country : " . $person->country . PHP_EOL;

$person->sayHello("Alfian");
$person->sayHello(null);

const APP = "Belajar PHP OOP";

echo APP . PHP_EOL;

$person->info();