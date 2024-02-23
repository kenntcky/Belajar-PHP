<?php

require_once "GetConnection.php";

$db = getConnection();

$db->beginTransaction();

$db->exec("INSERT INTO siswa(namas, kelas, agama, gender, telepon) 
VALUES ('Ihsan', 'X PPLG-2', 'Islam', 'L', 938019)");



$db->commit();
$db = null;

