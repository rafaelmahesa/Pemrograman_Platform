<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form method="POST" action="latihan1b.php">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value=""/></td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td>:</td>
                <td><input type="text" name="nama" value=""/></td>
            </tr>
            <tr>
                <td>Status Kelulusan</td>
                <td>:</td>
                <td>
                <select name="status">
                    <option value="Sangat Memuaskan">Sangat Memuaskan</option>
                    <option value="Memuaskan">Memuaskan</option>
                    <option value="Biasa">Biasa</option>
                    <option value="Kurang Memuaskan">Kurang Memuaskan</option>
                    <option value="Tidak Memuaskan">Tidak Memuaskan</option>
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Submit Data"/></td>
            </tr>
        </form>
    </table>
</body>
</html>