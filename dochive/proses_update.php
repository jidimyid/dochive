<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];

$query="UPDATE tb_login SET password='$password', level='$level' WHERE username='$username';";
$hasil=mysqli_query($conn, $query);
if ($hasil) {
    header ('location:kelola-user.php');
}
else {
    echo "Gagal update data";
}
?>