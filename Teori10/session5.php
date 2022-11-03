<?php
    session_start();
?>
<html>
    <body>
        <?php
            if(isset($_SESSION["favcolor"])){
                echo "Favorite color is ".$_SESSION["favcolor"].".<br>";
            }
            if(isset($_SESSION["favanimal"])){
                echo "Favorite animal is ".$_SESSION["favanimal"].".";
            }
        ?>
    </body>
</html>