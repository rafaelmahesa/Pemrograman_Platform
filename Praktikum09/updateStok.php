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

    $sql = "UPDATE stok_barang SET nama='$namaBarang',jenis='$jenis',lokasi='$lokasi',harga=$hargaSatuan,jumlah=$jumlahStok WHERE kode='$kodeBarang'";

    if(mysqli_query($conn, $sql)){
        echo "Record kode: $kodeBarang updated successfully<br>";
        echo "<a href='crud.php'>Isi Kembali</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>