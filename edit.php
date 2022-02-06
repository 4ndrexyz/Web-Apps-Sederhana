<?php 

include ("config.php");

if(!isset($_GET['id'])) {
    header('Location: daftar.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id = $id";
$query = mysqli_query($conn, $sql);
$siswa_baru = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1){
    die ("Data Tidak Ditemukan !");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>EDIT SISWA</h1>
    </header>

    <form action="proses-edit.php" method="POST">
        <input type="hidden" value=" <?php echo $siswa_baru['id'] ?> ">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required value=" <?php echo $siswa_baru['nama'] ?> "></td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td>:</td>
                <td><input type="text" name="kelas" id="kelas" required value=" <?php echo $siswa_baru['kelas'] ?> "></td>
            </tr>
            <tr>
                <td><label for="jk">Jenis Kelamin</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="jk" id="jk" required value=" <?php echo $siswa_baru['jk'] ?> ">
                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><textarea name="alamat" id="alamat" cols="22" rows="5" required value=" <?php echo $siswa_baru['alamat'] ?> "></textarea></td>
            </tr>
        </table>

         <div class="tombol-edit">
            <input type="submit" value="Simpan & Edit" id="edit" name="edit"> <br>
            <a href="index.php"><input type="button" value="Kembali Ke Dashbord"></a>
        </div>
    </form>

    <footer>
        <div class="copyright-edit">
            <p>&copy; copyright <script>document.write(new Date().getFullYear())</script> | 4ndrexyz</p>
        </div>
    </footer>
</body>
</html>