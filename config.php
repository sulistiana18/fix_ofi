<?php

$db = mysqli_connect("localhost:3306", "root", "", "fix_ofi");

//cek koneksi
if (mysqli_connect_error()) {
    echo "Koneksi database gagal :" . mysqli_connect_error();
}
