<?php session_start(); ?>
<html>
    <body>
        <?php
        if(isset($_SESSION["hal1"])){
            echo "<h1>Ini Halaman Tiga</td>";
        } else{
            header("Location:hal_error.php");
        }
        ?>
    </body>
</html>