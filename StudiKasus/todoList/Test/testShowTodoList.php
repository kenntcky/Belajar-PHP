<?php

require_once __DIR__ . "\..\Model.php";
require_once __DIR__ . "\..\BusinessLogic\addTodoList.php";
require_once __DIR__ . "\..\BusinessLogic\showTodoList.php";

addTodoList("rawer");

showTodoList();