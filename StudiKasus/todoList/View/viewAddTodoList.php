<?php

require_once __DIR__ . "/../model.php";
require_once __DIR__ . "/../Util/input.php";
require_once __DIR__ . "/../BusinessLogic/addTodoList.php";

function viewAddTodoList()
{
    echo "Adding a TODO." . PHP_EOL;

    $newtodo = input("New Todo (x to cancel) : ");

    if ($newtodo == "x") {
        echo "Cancelled new todo." . PHP_EOL . PHP_EOL;
    } else {
        addTodoList($newtodo);
    }
}