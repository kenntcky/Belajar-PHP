<?php

require_once "GetConnection.php";

$data = [
    "nama" => "Bu Ida",
    "kelas" => "Guru",
    "agama" => "Islam",
    "gender" => "Sejarah",
    "telepon" => "666"
];

$db = getConnection();

$statement = $db->prepare("INSERT INTO siswa VALUES (null, ?, ?, ?, ?, ?, null, null)");
$statement->execute([
    $data["nama"], $data["kelas"], $data["agama"], $data["gender"], $data["telepon"]
]);

$lastid = $db->lastInsertId();
$insert = $db->prepare("SELECT * FROM siswa WHERE id = ?");
$insert->execute([$lastid]);

if ($row = $insert->fetch()) {
    echo "Berhasil menambahkan data " . $row["nama"] . PHP_EOL;
}

$db = null;