<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM BIODATA</h1>
    <table>
        <form method="POST" action="latihan2b.php">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value=""></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="text" name="umur" value=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" id="pria" name="jenisKelamin" value="Pria">
                    <label for="pria">Pria</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="radio" id="wanita" name="jenisKelamin" value="Wanita">
                    <label for="wanita">Wanita</label>
                </td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td>:</td>
                <td>
                    <input type="checkbox" id="music" name="hobby[]" value="Music">
                    <label for="music">Music</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" id="programming" name="hobby[]" value="Programming">
                    <label for="programming">Programming</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" id="game" name="hobby[]" value="Game">
                    <label for="game">Game</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" id="movies" name="hobby[]" value="Movies">
                    <label for="movies">Movies</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" id="travelling" name="hobby[]" value="Travelling">
                    <label for="travelling">Travelling</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" id="sport" name="hobby[]" value="Sport">
                    <label for="sport">Sport</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" id="organization" name="hobby[]" value="Organization">
                    <label for="organization">Organization</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="checkbox" id="automotive" name="hobby[]" value="Automotive">
                    <label for="automotive">Automotive</label>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </form>
    </table>
</body>
</html>