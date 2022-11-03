<html>
    <head>
        <title>Pendaftaran Berhasil</title>
    </head>
    <body>
        <?php
            setcookie('submitted', '1');
            echo "<h1>Pendaftaran Berhasil</h1>";
            $noInduk = $_POST['noInduk'];
            $nama = $_POST['nama'];
            $status= $_POST['status'];
            $list = implode(", ",$_POST['minat']);
            setcookie('noInduk', $noInduk);
            setcookie('nama', $nama);
            setcookie('status', $status);
            setcookie('minat', $list);
        ?>
    </body>
</html>