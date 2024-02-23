<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO siswa(id, nama, kelas, agama, gender, telepon)
    VALUES('jirb','Jabriel','X PPLG-2','Islam','L','69420')
SQL;

$connection->exec($sql);

$connection = null;