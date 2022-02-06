<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>DAFTAR SISWA</h1>
    </header>

    <div class="container">
        <div class="tombol-daftar">
            <a href="tambah.php"><input type="button" value="[+] Tambah Siswa" style="margin-bottom: 20px;"></a>
        </div>
        <table border="1" cellspacing="0" cellpadding="10" style="text-align: center; border-style: solid;">
            <thead style="background-color: dodgerblue; color: white";>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
                
            <tbody style="background-color: #fff;">
                <?php 
                
                $no = 0;
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($conn, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                
                    $no ++;
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['kelas'] . "</td>";
                    echo "<td>" . $siswa['jk'] . "</td>";
                    echo "<td>" . $siswa['alamat'] . "</td>";
                    echo "<td>";
                    echo "<a href = 'edit.php?id=" . $siswa['id'] . "'><input type='button' value='Edit' style='margin-right:5px;'></a>";
                    echo "<a href = 'delete.php?id=" . $siswa['id'] . "'><input type='button' value='Hapus'></a>";
                    echo "</td>";
                    echo "</tr>";
                }
                
                ?>
            </tbody>
        </table>
        <div class="tombol-daftar">
            <a href="index.php"><input type="button" value="Kembali ke Dashbord" style="margin-top: 20px;"></a>
        </div>
    </div>

    <div class="copyright-daftar">
        <p>&copy; copyright <script>document.write(new Date().getFullYear())</script> | 4ndrexyz</p>
    </div>
</body>
</html>