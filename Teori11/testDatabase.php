<?php
    $servername = "localhost";
    $username = "user077";
    $password = "205314077";
    $dbname = "user077";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sql = "SELECT NIM, NAMA FROM mahasiswa";
    $result = mysqli_query($conn, $sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["NIM"]. " - Name: " . $row["NAMA"]. "<br>";
      }
    } else {
      echo "0 results";
    }

    mysqli_close($conn);
?>