<!DOCTYPE html>
<html>

<head>
    <title>Login Mlaku Collections</title>
    <link rel="stylesheet" type="text/css" href="assets/login.css">
</head>

<body>
    <form action="proses_login.php" method="POST">
        <h2>LOGIN</h2>

        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='error'>USER ID atau Password salah!</div>";
            }
        }
        ?>
        <input type="text" name="IDUSER" placeholder="IDUSER" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="button" name="cancel" class="cancelbtn" onclick="location.href='index.php'">Back</button>
        <button type="submit" name="register" class="btn">Login</button>
    </form>




</body>

</html>