<?php

require_once __DIR__ . "/../model.php";
require_once __DIR__ . "/../BusinessLogic/showTodoList.php";
require_once __DIR__ . "/../BusinessLogic/addTodoList.php";
require_once __DIR__ . "/../BusinessLogic/removeTodoList.php";
require_once __DIR__ . "/../View/viewAddTodoList.php";
require_once __DIR__ . "/../View/viewRemoveTodoList.php";
require_once __DIR__ . "/../Util/input.php";
function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu : " . PHP_EOL;
        echo "1. Add To Do List" . PHP_EOL;
        echo "2. Remove To Do List" . PHP_EOL;
        echo "x. Close app" . PHP_EOL;

        $choice = strtolower(input("Choose : "));
        echo PHP_EOL;

        if ($choice == "1") {
            viewAddTodoList();
        } elseif ($choice == "2") {
            viewRemoveTodoList();
        } elseif ($choice == "x") {
            break;
        } else {
            echo "Undefined choice. Please choose from the menu above." . PHP_EOL;
            echo PHP_EOL;
        }
    }

    echo "See you next time!";
}