<?php

require_once __DIR__ . "/../Util/input.php";
function addTodoList(String $new)
{
    global $todoList;

    $insert = sizeof($todoList) + 1;

    $todoList[$insert] = $new;
    echo "Successfully inserted new todo '$todoList[$insert]'" . PHP_EOL . PHP_EOL;

}