<?php
    $kodeBarang = $_POST['kodeBarang'];
    $namaBarang = $_POST['namaBarang'];
    $jenis = $_POST['jenis'];
    $lokasi = $_POST['lokasi'];
    $hargaSatuan = $_POST['hargaSatuan'];
    $jumlahStok = $_POST['jumlahStok'];

    $servername = "localhost";
    $username = "user077";
    $password = "205314077";
    $dbname = "inventaris";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sql = "INSERT INTO stok_barang(kode, nama, jenis, lokasi, harga, jumlah) VALUES ('$kodeBarang','$namaBarang','$jenis','$lokasi',$hargaSatuan,$jumlahStok)";

    if(mysqli_query($conn, $sql)){
        echo "New record created successfully<br>";
        echo "<a href='crud.php'>Isi Kembali</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>