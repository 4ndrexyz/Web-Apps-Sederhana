<?php 

include ("config.php");
if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM siswa WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: daftar.php');
    } else {
        die ('Data Tidak Ditemukan');
    }

} else {
    die ("<script> alert('Akses Ditolak!') </script>");
} 

?>