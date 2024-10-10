<?php

require_once "Data/Conflict.php";
require_once 'Data/Helper.php'; 

use Data\One\Conflict as OneConflict;
use function Helper\helpMe;

$conflict1 = new OneConflict();
$conflict2 = new \Data\Two\Conflict();

helpMe();
echo "End program" . PHP_EOL;