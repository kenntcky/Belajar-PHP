<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$result = $connection->query("SELECT * FROM siswa");

$data = $result->fetchAll();

$connection = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1" cellpadding="5">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Agama</th>
            <th>Gender</th>
            <th>Telepon</th>
        </thead>
        <tbody>
            <?php foreach ($data as $set) : ?>
                <tr>
                    <td><?= $set['id'] ?></td>
                    <td><?= $set['nama'] ?></td>
                    <td><?= $set['kelas'] ?></td>
                    <td><?= $set['agama'] ?></td>
                    <td><?= $set['gender'] ?></td>
                    <td><?= $set['telepon'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    
    
    
</body>
</html>