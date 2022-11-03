<?php session_start(); ?>
<html>
    <body>
        <?php
        if(isset($_SESSION["hal1"])){
            echo "<h1>Ini Halaman Empat</td>";
            session_unset();
            session_destroy();
        } else{
            header("Location:hal_error.php");
        }
        ?>
    </body>
</html>