<html>
<head>
    <title>Halaman Tampil</title>
    <style>
        ol{
            margin-top: 0em;
            padding-left: 1em;
        }
    </style>
</head>
<body>
    <?php
        $nama = $_POST['nama'];
        $makanan = $_POST['makanan'];
        $minuman = $_POST['minuman'];

        echo "<h1>Tampilkan Pesanan</h1>";
        echo "$nama memesan<br>";
        echo "<br>Makanan<ol>";
        foreach ($makanan as $mk){
            echo "<li>$mk</li>";
        }
        echo "</ol>";
        echo "Minuman<ol>";
        foreach ($minuman as $mn){
            echo "<li>$mn</li>";
        }
        echo "</ol>";
        echo "<a href='./halamanInput.php'>kembali</a>";
    ?>
</body>
</html>