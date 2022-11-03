<html>
    <head>
        <title>Halaman Registrasi</title>
    </head>
    <body>
        <?php
            if($_COOKIE['submitted']!=null && $_COOKIE['submitted']==1){
                echo "<h1>ANDA SUDAH TERDAFTAR SEBAGAI PESERTA SEMINAR</h1>
                      <table border='1px solid'>
                        <tr>
                            <td>No Induk</td>
                            <td>".$_COOKIE['noInduk']."</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>".$_COOKIE['nama']."</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>".$_COOKIE['status']."</td>
                        </tr>
                        <tr>
                            <td>Minat</td>
                            <td>".$_COOKIE['minat']."</td>
                        </tr>
                      </table>
                      ";
            }else{
                setcookie('submitted','0');
                echo "<h1>Pendaftaran Perserta Seminar</h1>
                      <form method='post' action='regisFeedback.php'>
                        <table>
                            <tr>
                                <td>No Induk</td>
                                <td><input type='text' name='noInduk' value=''></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><input type='text' name='nama' value=''></td>
                            </tr>
                            <tr>
                                <td rowspan='2'>Status</td>
                                <td><input type='radio' name='status' id='dosen'
                                    value='Dosen'><label for='dosen'>Dosen</td>
                            </tr>
                            <tr>
                                <td><input type='radio' name='status' id='mahasiswa'
                                    value='Mahasiswa'><label for='mahasiswa'>Mahasiswa</td>
                            </tr>
                            <tr>
                                <td rowspan='4'>Minat</td>
                                <td><input type='checkbox' name='minat[]' id='programming'
                                    value='Programming'><label for='programming'>Programming</td>
                            </tr>
                            <tr>
                                <td><input type='checkbox' name='minat[]' id='database'
                                    value='Database'><label for='database'>Database</td>
                            </tr>
                            <tr>
                                <td><input type='checkbox' name='minat[]' id='networking'
                                    value='Networking'><label for='networking'>Networking</td>
                            </tr>
                            <tr>
                                <td><input type='checkbox' name='minat[]' id='multimedia'
                                    value='Multimedia'><label for='multimedia'>Multimedia</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type='submit' value='Submit'></td>
                            </tr>
                        </table>
                      </form>";
            }?>
    </body>
</html>