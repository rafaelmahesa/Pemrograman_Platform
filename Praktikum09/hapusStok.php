<?php
    $kodeBarang = $_POST['kodeBarang'];

    $servername = "localhost";
    $username = "user077";
    $password = "205314077";
    $dbname = "inventaris";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sql = "DELETE FROM `stok_barang` WHERE kode='$kodeBarang'";

    if(mysqli_query($conn, $sql)){
        echo "Record kode: $kodeBarang deleted successfully<br>";
        echo "<a href='crud.php'>Isi Kembali</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>