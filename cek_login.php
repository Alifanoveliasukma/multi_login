<?php
//panggil koneksi database
include "koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);
$level = mysqli_escape_string($koneksi, $_POST['level']);


//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM tuser WHERE username = '$username' and level='$level' ");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if($user_valid){
    //jika username terdaftar
    //cek password sesuai atau tidak
    if($password == $user_valid['password']){
        //jika password sesuai
        //buat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['level'] = $user_valid['level'];

        //uji level user
        if($level == "pegawai"){
            header('location:home_pegawai.php');
        } elseif ($level == "operator") {
            header('location:home_operator.php');
        } elseif ($level == "admin") {
            header('location:home_admin.php');
        }
    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='index.php'</script>";
    }

} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='index.php'</script>";
}