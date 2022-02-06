<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>SELAMAT DATANG</h1>
        <p>"Carilah Ilmu Sampai Ke Negri China"</p>
    </header>

   

    <nav>
        <p>Silahkan Pilih Opsi Dibawah Ini :</p>
        <a href="tambah.php"><button>PENDAFTARAN</button></a>
        <a href="daftar.php"><button>DAFTAR SISWA</button></a>
    </nav>

    <footer>
      
            <?php if(isset($_GET['status'])): ?>
                <?php 
                
                if($_GET['status'] == 'sukses') {
                    echo "<script> alert('Yeay, Siswa Berhasil Ditambahkan !') </script>";
                } else {
                    echo "<script> alert('Yahh..., Siswa Gagal Ditambahkan !') </script>";
                }
                
                ?>
            <?php endif; ?>
            
            <div class="copyright">
                <p>&copy; copyright <script>document.write(new Date().getFullYear())</script> | 4ndrexyz</p>
            </div>
    </footer>
</body>
</html>

