<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
    <style>
        h2{
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>
<body>
    <h2>INPUT STOK GUDANG</h2>
    <h2>TOKO KELONTONG BAHAGIA</h2>
    <p><a href="listStok.php">| Lihat Daftar Stok |</a></p>
    <form method="post">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kodeBarang"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="namaBarang"></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>
                    <input type="radio" name="jenis" id="makanan" value="Makanan">
                    <label for="makanan">Makanan</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="jenis" id="nonMakanan" value="Non Makanan">
                    <label for="nonMakanan">Non Makanan</label>
                </td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>
                    <select name="lokasi" id="lokasi">
                        <option value="Rak A">Rak A</option>
                        <option value="Rak B">Rak B</option>
                        <option value="Rak C">Rak C</option>
                        <option value="Rak D">Rak D</option>
                        <option value="Rak E">Rak E</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input type="text" name="hargaSatuan"></td>
            </tr>
            <tr>
                <td>Jumlah Stok</td>
                <td><input type="text" name="jumlahStok"></td>
            </tr>
    </table>
    <button type="submit" formaction="simpanStok.php">Simpan</button>
    <button type="submit" formaction="UpdateStok.php">Update</button>
    <button type="submit" formaction="hapusStok.php">Hapus</button>
    </form>
</body>
</html>