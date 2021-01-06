<?php

include 'config.php';

$kodeBarang = "";
$Merek = "";
$JenisBarang = "";
$Ukuran = "";
$Satuan = "";
$hargaBeli = "";
$hargaJual = "";
$errors = array();

if (isset($_POST['register'])) {
    $kodeBarang = mysqli_real_escape_string($db, $_POST['Kode_Barang']);
    $Merek = mysqli_real_escape_string($db, $_POST['Merek']);
    $JenisBarang = mysqli_real_escape_string($db, $_POST['Jenis_Barang']);
    $Ukuran = mysqli_real_escape_string($db, $_POST['Ukuran']);
    $Satuan = mysqli_real_escape_string($db, $_POST['Satuan']);
    $hargaBeli = mysqli_real_escape_string($db, $_POST['Harga_Beli']);
    $hargaJual = mysqli_real_escape_string($db, $_POST['Harga_Jual']);

    $mysql_get_users = mysqli_query($db, "SELECT * FROM Barang where Kode_Barang='$kodeBarang'");
    $get_rows = mysqli_num_rows($mysql_get_users);

    if ($get_rows >= 1) {
        array_push($errors, "An account with this email already exists");
    }

    if (empty($nama)) {
        array_push($errors, "Name is required");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    }

    if (empty($no_telp)) {
        array_push($errors, "Phone number is required");
    }

    if (empty($alamat)) {
        array_push($errors, "Address is required");
    }

    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    if (count($errors) == 0) {
        $sql = "INSERT INTO akun (nama, email, no_telp, alamat, password) VALUES ('$nama', '$email', '$no_telp', '$alamat', '$password_1')";
        mysqli_query($koneksi, $sql);

        header('location:login.php');
    }
}
