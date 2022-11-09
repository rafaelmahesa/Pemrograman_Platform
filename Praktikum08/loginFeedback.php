<?php
    session_start();
    if(! isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Login</title>
</head>
<body>
    <?php
        if($_POST['username'] == 'admin' && $_POST['password'] == '123456'){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header("Location: listBarang.php");
            exit();
        }
    ?>
    <h2 style="text-align:center">Maaf, username atau password anda salah</h2>
    <p style="text-align:center"><a href="login.php">coba kembali</a></p>
</body>
</html>