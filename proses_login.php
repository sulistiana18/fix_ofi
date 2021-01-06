<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$iduser = $_POST['IDUSER'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($db, "select * from user where IDUSER='$iduser' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
$q1 = "SELECT nama FROM user WHERE IDUSER='$iduser' AND password='$password'";
$r1 = mysqli_query($db, $q1);
$username = mysqli_fetch_assoc($r1)["nama"];

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai kasir
    if ($data['status'] == "KASIR") {
        // buat session login dan username
        $_SESSION['IDUSER'] = $iduser;
        $_SESSION['status'] = "KASIR";
        $_SESSION['nama'] = $nama;
        header("location:home_kasir.php");

        // cek jika user login sebagai pemilik
    } else if ($data['status'] == "PEMILIK") {
        // buat session login dan username
        $_SESSION['IDUSER'] = $iduser;
        $_SESSION['status'] = "PEMILIK";
        $_SESSION['nama'] = $nama;
        header("location:home_pemilik.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:login_kasir.php?pesan=gagal");
    }
} else {
    header("location:login_kasir.php?pesan=gagal");
}
