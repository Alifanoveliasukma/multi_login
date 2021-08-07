<?php
session_start();
if(empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terimakasih');document.location='index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pegawai | ngoding Cerdas</title>
    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron bg-info text-white">
  <h1 class="display-4">Hello,<b> <?= $_SESSION['nama_lengkap'] ?></b></h1>
  <p class="lead"> Selamat datang, anda berhasil Login sebagai <b><?= $_SESSION['username'] ?></b> </p>
  <a class="btn btn-danger btn-lg" href="logout.php" role="button">Log out</a>
</div>
</body>
</html>