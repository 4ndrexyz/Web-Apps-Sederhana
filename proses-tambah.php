<?php 

include ("config.php");

if(isset($_POST['simpan'])) {
    
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO siswa (nama, kelas, jk, alamat) VALUE ('$nama', '$kelas', '$jk', '$alamat')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die ("<script> alert('Akses Ditolak!') </script>");
} 

?>