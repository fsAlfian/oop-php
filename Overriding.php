<?php

require_once 'Data/Manager.php';

$manager = new Manager();
$manager->name = "John";
$manager->sayHello('gita');

$vp = new VicePresident();
$vp->name = "Doe";
$vp->sayHello('gita');