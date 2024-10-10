<?php

require_once 'Data/Product.php';

$product = new Product("Laptop", 1000000);
var_dump($product);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;