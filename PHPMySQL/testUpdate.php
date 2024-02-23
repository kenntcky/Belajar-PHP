<?php

require_once __DIR__ . "/GetConnection.php";

$db = getConnection();

$newData = [
    "gender" => "L"
];

$statement = $db->prepare("UPDATE siswa SET gender = ? WHERE id = ?");
$statement->execute([
    $newData["gender"], 4
]);

echo "Updated Successfully!";

$db = null;