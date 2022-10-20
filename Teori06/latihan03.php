<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        function getPredikat($ipk){
            if ($ipk <2.75){
                echo "IPK Anda : ".$ipk;
                echo "<br>Predikat Anda : ";
            }
            elseif (2.75 <= $ipk && $ipk <= 3.00){
                echo "IPK Anda : ".$ipk;
                echo "<br>Predikat Anda : Memuaskan";
            }
            elseif (3.00 < $ipk && $ipk <= 3.50){
                echo "IPK Anda : ".$ipk;
                echo "<br>Predikat Anda : Sangat Memuaskan";
            }
            else{
                echo "IPK Anda : ".$ipk;
                echo "<br>Predikat Anda : Dengan Pujian";
            }
        }
    ?>
</head>
<body>
    <?php
        $ipk = 3.25;
        if ($ipk <2.75){
            echo "IPK Anda : ".$ipk;
            echo "<br>Predikat Anda : ";
        }
        elseif (2.75 <= $ipk && $ipk <= 3.00){
            echo "IPK Anda : ".$ipk;
            echo "<br>Predikat Anda : Memuaskan";
        }
        elseif (3.00 < $ipk && $ipk <= 3.50){
            echo "IPK Anda : ".$ipk;
            echo "<br>Predikat Anda : Sangat Memuaskan";
        }
        else{
            echo "IPK Anda : ".$ipk;
            echo "<br>Predikat Anda : Dengan Pujian";
        }
    ?>
    <table>
        <form method="post" action="latihan03.php">
            <tr>
                <td>Masukkan IPK Anda :</td>
                <td>
                    <input type="text" name="nama" value="">
                </td>
                <td><input type="submit" value="Submit"></td>
            </tr>
            <tr>
                <td colspan = 3>
                    <?php
                        $ipk = $_POST['nama'];
                        echo getPredikat($ipk);
                    ?>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>