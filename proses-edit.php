<?php 

include ("config.php");

if(isset($_POST['edit'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE siswa SET nama='$nama', kelas='$kelas', jk='$jk', alamat='$alamat' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: daftar.php');
    } else {
        echo "Gagal di Update";
    }

} else {
    die ("<script> alert('Akses Ditolak!') </script>");
} 

?>