<?php include('input_data_barang.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Barang</title>
    <link rel="stylesheet" href="assets/login.css">

</head>

<body>
    <form method="post" action="data_barang.php">
        <h2>Form Data Barang</h2>
        <?php include('errors.php'); ?>
        <input type="text" maxlength="128" name="ID_Supplier" placeholder="ID Supplier">
        <input type="text" maxlength="128" name="Nama_Supplier" placeholder="Nama Supplier">
        <input type="text" maxlength="128" name="Alamat" placeholder="Alamat">
        <input type="text" maxlength="128" name="Telepon" placeholder="Telepon">

        <button type="button" name="cancel" class="cancelbtn" onclick="location.href='tampilanawalsekali.php'">Cancel</button>
        <button type="submit" name="register" class="btn">Save</button>
    </form>

</body>

</html>