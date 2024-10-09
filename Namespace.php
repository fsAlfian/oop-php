<?php
require_once "Data/Conflict.php";
require_once "Data/Helper.php";

$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();
echo "End program" . PHP_EOL;

echo Helper\helpMe();