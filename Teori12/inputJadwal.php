<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input jadwal</title>
</head>
<body>
    <h2>Input Jadwal Mata Kuliah</h2>
    <form action="feedbackInput.php" method="post">
        <table>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td><input type="text" name="kodeMK"></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td><input type="text" name="mataKuliah"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                    <select name="kelas" id="kelas">
                        <option value="A">A</option>
                        <option value="AP">AP</option>
                        <option value="B">B</option>
                        <option value="BP">BP</option>
                        <option value="C">C</option>
                        <option value="CP">CP</option>
                        <option value="D">D</option>
                        <option value="DP">DP</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pengajar</td>
                <td><input type="text" name="pengajar"></td>
            </tr>
            <tr>
                <td>Hari</td>
                <td>
                    <select name="hari" id="hari">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jam Mulai</td>
                <td>
                    <select name="jamMulai" id="jamMulai">
                        <option value="06:00">06:00</option>
                        <option value="07:00">07:00</option>
                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jam Selesai</td>
                <td>
                    <select name="jamSelesai" id="jamSelesai">
                        <option value="06:00">06:00</option>
                        <option value="07:00">07:00</option>
                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
    <a href="lihatJadwal.php">Lihat Jadwal</a>
</body>
</html>