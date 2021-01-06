<?php include('input_data_barang.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pelanggan</title>
    <link rel="stylesheet" href="assets/login.css">

</head>

<body>
    <form method="post" action="data_barang.php">
        <h2>Form Data Pelanggan</h2>
        <?php include('errors.php'); ?>
        <input type="text" maxlength="128" name="ID_Pelanggan" placeholder="ID Pelanggan">
        <input type="text" maxlength="128" name="Nama_Pelanggan" placeholder="Nama Pelanggan">
        <input type="text" maxlength="128" name="ID_Penjualan" placeholder="ID Penjualan">
        <input type="text" maxlength="128" name="Tanggal_Penjualan" placeholder="Tanggal Penjualan">

        <button type="button" name="cancel" class="cancelbtn" onclick="location.href='tampilanawalsekali.php'">Cancel</button>
        <button type="submit" name="register" class="btn">Save</button>
    </form>

</body>

</html>