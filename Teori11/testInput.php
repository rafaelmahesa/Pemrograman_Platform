<?php
    $servername = "localhost";
    $username = "user077";
    $password = "205314077";
    $dbname = "user077";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sql = "INSERT INTO mahasiswa(NIM, NAMA) VALUES ('205314004', 'Test3')";

    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>