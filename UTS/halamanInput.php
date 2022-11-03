<html>
<head>
    <title>USIP 1 Nomor 5</title>
</head>
<body>
    <h1>Pesan Makanan dan Minuman</h1>
    <table>
        <form action="halamanTampil.php" method="post">
            <tr>
                <td>Nama Pemesan</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Makanan</td>
                <td>
                    <input type="checkbox" name="makanan[]" id="nasiGoreng" value="Nasi Goreng">
                    <label for="nasiGoreng">Nasi Goreng</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="makanan[]" id="mieGoreng" value="Mie Goreng">
                    <label for="mieGoreng">Mie Goreng</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="makanan[]" id="mieGodog" value="Mie Godog">
                    <label for="mieGodog">Mie Godog</label>
                </td>
            </tr>
            <tr>
                <td>Minuman</td>
                <td>
                    <input type="checkbox" name="minuman[]" id="esTehManis" value="Es Teh Manis">
                    <label for="esTehManis">Es Teh Manis</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="minuman[]" id="esJeruk" value="Es Jeruk">
                    <label for="esJeruk">Es Jeruk</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="minuman[]" id="tehPanas" value="Teh Panas">
                    <label for="tehPanas">Teh Panas</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="minuman[]" id="jerukPanas" value="Jeruk Panas">
                    <label for="jerukPanas">Jeruk Panas</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
</body>
</html>