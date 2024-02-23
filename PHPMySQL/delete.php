<?php

require_once "GetConnection.php";

$connection = getConnection();

$query = "DELETE FROM siswa WHERE id = ?";
$statement = $connection->prepare($query);
$statement->execute([
    16
]);

echo "Berhasil menghapus data";

$connection = null;