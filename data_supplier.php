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
        <input type="text" maxlength="128" name="KodeBarang" placeholder="KodeBarang">
        <input type="text" maxlength="128" name="Merek" placeholder="Merek">
        <input type="text" maxlength="128" name="JenisBarang" placeholder="JenisBarang">
        <input type="text" maxlength="128" name="ukuran" placeholder="ukuran">
        <input type="text" maxlength="128" name="satuan" placeholder="satuan">
        <input type="text" maxlength="128" name="hargabeli" placeholder="hargaBeli">
        <input type="text" maxlength="128" name="hargaJual" placeholder="hargaJual">

        <button type="button" name="cancel" class="cancelbtn" onclick="location.href='tampilanawalsekali.php'">Cancel</button>
        <button type="submit" name="register" class="btn">Create Account</button>
    </form>

</body>

</html>