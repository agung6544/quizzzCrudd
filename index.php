<?php
require 'function.php';

$officials = query("SELECT * FROM tab_pegawai");


if (isset($_POST["search"])) {
    $official = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    table td {
        border: 1px solid black;
    }

    table th {
        border: 1px solid black;

    }
</style>
<body>
<nav>
    <center>
        <div class="wrapper">
            <div class="logo"><a href=""></a>DATA PEGAWAI</div>
        </div>
        </center>
</nav>
<div class="data p-6">

<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat</th>
            <th scope="col">Umur</th>
            <th scope="col">Jabatan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($officials as $official) :?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $official["id"]; ?></td>
                <td><?= $official["nama"]; ?></td>
                <td><?= $official["alamat"]; ?></td>
                <td><?= $official["umur"]; ?></td>
                <td><?= $official["jabatan"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $official["id"]; ?>">
                        <i class="fa-solid fa-pen-to-square text-primary"></i>
                    </a>
                    <a href="hapus.php?id=<?= $official["id"]; ?>">
                        <i class="fa-solid fa-trash text-danger"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php $i++; ?>
    </tbody>
</table>
<a href="tambah.php">
    <i class="fa-solid fa-user-plus"></i>
</a>
</div>
</body>
</html>