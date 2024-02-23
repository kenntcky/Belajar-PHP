<?php

require_once "GetConnection.php";
require_once "Model\userdata.php";
require_once "Repository\userdataRepository.php";

use Repository\userdataImpls;
use Model\userdata;

$connection = getConnection();
$repo = new userdataImpls($connection);

$userdata = new userdata(username: "Kenta", password: "kentakifriedciken");
$newUserdata = $repo->insert($userdata);

var_dump($newUserdata->getId());

//$userdata = $repo->findById(10);
//var_dump($userdata);

//$userdatas = $repo->findAll();
//var_dump($userdatas);

$connection = null;