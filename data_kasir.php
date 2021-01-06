<?php include('input_data_barang.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Kasir</title>
    <link rel="stylesheet" href="assets/login.css">

</head>

<body>
    <form method="post" action="data_barang.php">
        <h2>Form Data Kasir</h2>
        <?php include('errors.php'); ?>
        <input type="text" maxlength="128" name="ID_Kasir" placeholder="ID Kasir">
        <input type="text" maxlength="128" name="Nama_Kasir" placeholder="Nama Kasir">
        <input type="text" maxlength="128" name="Telepon" placeholder="Telepon">

        <button type="button" name="cancel" class="cancelbtn" onclick="location.href='tampilanawalsekali.php'">Cancel</button>
        <button type="submit" name="register" class="btn">Create Account</button>
    </form>

</body>

</html>