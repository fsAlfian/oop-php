<?php

require_once "Data/Shape.php";

$shape = new Shape();
echo $shape->getCorner().  PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;