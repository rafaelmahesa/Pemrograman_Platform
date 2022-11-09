<?php
    $servername = "localhost";
    $username = "user077";
    $password = "205314077";
    $dbname = "user077";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sql = "INSERT INTO mahasiswa(NIM, NAMA) VALUES ('205314005', 'Test4');";
    $sql.= "INSERT INTO mahasiswa(NIM, NAMA) VALUES ('205314006', 'Test5');";
    $sql.= "INSERT INTO mahasiswa(NIM, NAMA) VALUES ('205314007', 'Test6')";

    if(mysqli_multi_query($conn, $sql)){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>