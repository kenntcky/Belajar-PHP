<?php

require_once __DIR__ . "/../Util/input.php";
function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        echo "TODO number $number does not exist." . PHP_EOL;
        echo PHP_EOL;
        return false;
    }

    echo "Successfully removed '$todoList[$number]'" . PHP_EOL;

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    $removed = $todoList[$number - 1];
    echo PHP_EOL;
    unset ($todoList[sizeof($todoList)]);
    return true;
}