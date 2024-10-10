<?php

class Manager {
    var string $name;
    function sayHello(string $name): void {
        echo "Hi $name, my name is manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager {
     function sayHello(string $name): void {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}