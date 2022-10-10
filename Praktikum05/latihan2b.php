<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, tr{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h1>FORM BIODATA - REVIEW</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST["nama"];?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $_POST["alamat"];?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><?php echo $_POST["umur"];?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST["jenisKelamin"];?></td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td>
                <?php
                    $list = implode(", ", $_POST["hobby"]);
                    echo $list;
                ?>
            </td>
        </tr>
    </table>
</body>
</html>