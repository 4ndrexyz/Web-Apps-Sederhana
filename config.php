<?php 

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'db_formsiswa';

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die ("<script>alert('Server 404');</script>" . mysqli_connect_error());
} 

?>