<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "multi_login_php";

$koneksi = mysqli_connect($server, $user, $password, $database) or die (mysqli_error($koneksi));

?>