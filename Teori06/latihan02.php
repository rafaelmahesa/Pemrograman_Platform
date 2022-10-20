<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = array(3, 2, 5, 3, 7);
        $rataRata = array_sum($array)/count($array);
        echo "Nilai rata-ratanya = ",$rataRata;
    ?>
</body>
</html>