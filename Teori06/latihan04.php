<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form method="post" action="latihan04.php">
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value=""></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </form>
    </table>
    <?php
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "admin" && $password == "admin123"){
            echo "<script>document.body.innerHTML</script>";
            echo "Selamat Datang, anda berhasil login";
        }
        elseif($username == "" && $password == ""){

        }
        else{
            echo "Mohon maaf, anda gagal login";
        }
    ?>
</body>
</html>