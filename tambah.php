
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>PENDAFTARAN SISWA</h1>
    </header>

    <form action="proses-tambah.php" method="POST">
       
        <table>

            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td>:</td>
                <td><input type="text" name="kelas" id="kelas" required></td>
            </tr>
            <tr>
                <td><label for="jk">Jenis Kelamin</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="jk" id="jk" required>
                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><textarea name="alamat" id="alamat" cols="22" rows="5" required></textarea></td>
            </tr>
         
        </table>

        <div class="tombol">
            <input type="submit" value="Simpan" id="simpan" name="simpan"> <br>
            <input type="reset" value="Reset" class="reset">
            <a href="index.php"><input type="button" value="Kembali Ke Dashbord"></a>
        </div>
        
    </form>

    <footer>
        <div class="copyright-tambah">
            <p>&copy; copyright <script>document.write(new Date().getFullYear())</script> | 4ndrexyz</p>
        </div>
    </footer>
</body>
</html>