<?php

require_once __DIR__ . "/vendor/autoload.php";

use Kenntcky\Data\People;
use Kenntcky\Data\Grade;


$budi = new People("Budi");
$xpplg = new Grade("X PPLG");

echo $budi->greet("ken") . PHP_EOL;
echo "I'm from " . $xpplg->getClass() . PHP_EOL;