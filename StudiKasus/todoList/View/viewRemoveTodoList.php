<?php

require_once __DIR__ . "/../model.php";
require_once __DIR__ . "/../Util/input.php";
require_once __DIR__ . "/../BusinessLogic/removeTodoList.php";

function viewRemoveTodoList()
{
    echo "Removing a TODO." . PHP_EOL;

    $rmvtodo = input("Insert TODO number to remove (x to cancel) : ");
    echo PHP_EOL;

    if ($rmvtodo == "x") {
        echo "Cancelled remove TODO." . PHP_EOL;
    } else {
        removeTodoList($rmvtodo);
    }
}