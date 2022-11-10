<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Stok</title>
  <style>
    table, tr, th, td {
      border: 1px solid;
    }
    th, td{
      padding: 5px;
    }
    h2{
      margin: 0px;
      padding: 0px;
    }
  </style>
</head>
<body>
  <h2>DAFTAR STOK BARANG</h2>
  <h2>TOKO KELONTONG BAHAGIA</h2>
  <?php
    $servername = "localhost";
    $username = "user077";
    $password = "205314077";
    $dbname = "inventaris";
    $count=1;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM stok_barang";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        echo "<table class='tabel'>
                <tr>
                  <th>No.</th>
                  <th>Kode</th>
                  <th>Nama Barang</th>
                  <th>Jenis</th>
                  <th>Lokasi</th>
                  <th>Harga</th>
                  <th>Jumlah Stok</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>".$count."</td>
                  <td>".$row["kode"]."</td>
                  <td>".$row["nama"]."</td>
                  <td>".$row["jenis"]."</td>
                  <td>".$row["lokasi"]."</td>
                  <td>".$row["harga"]."</td>
                  <td>".$row["jumlah"]."</td>
                </tr>";
          $count++;
        }
        echo "</table>";
      } else {
        echo "0 results";
      }

    mysqli_close($conn);
  ?>
  <a href="crud.php">kembali</a>
</body>
</html>