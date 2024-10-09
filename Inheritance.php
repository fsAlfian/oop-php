<?php
require_once 'Data/Manager.php';

$manager = new Manager();
$manager->name = "Alfian";
$manager->sayHello('gita');

$vp = new VicePresident();
$vp->name = "JOKO";
$vp->sayHello('gita');