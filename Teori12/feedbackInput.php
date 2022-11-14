<?php
    $kodeMK = $_POST['kodeMK'];
    $mataKuliah = $_POST['mataKuliah'];
    $kelas = $_POST['kelas'];
    $pengajar = $_POST['pengajar'];
    $hari = $_POST['hari'];
    $jamMulai = $_POST['jamMulai'];
    $jamSelesai = $_POST['jamSelesai'];

    $servername = "localhost";
    $username = "user077";
    $password = "205314077";
    $dbname = "user077";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sql = "INSERT INTO jadwal(KODEMK, MATAKULIAH, KELAS, PENGAJAR, HARI, JAMMULAI, JAMSELESAI) VALUES ('$kodeMK','$mataKuliah','$kelas','$pengajar','$hari','$jamMulai','$jamSelesai')";

    if(mysqli_query($conn, $sql)){
        echo "Jadwal $mataKuliah berhasil disimpan<br>";
        echo "<a href='inputJadwal.php'>Isi Kembali</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>