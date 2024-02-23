<?php

require_once __DIR__ . "\..\Model.php";
require_once __DIR__. "\..\BusinessLogic\addTodoList.php";
require_once __DIR__. "/../BusinessLogic/removeTodoList.php";
require_once __DIR__. "\..\BusinessLogic\showTodoList.php";

$todoList[1] = "Belajar PHP MySQL";
$todoList[2] = "Belajar PHP Web";

showTodoList();

removeTodoList(1);

showTodoList();