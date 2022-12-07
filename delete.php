<?php
include "koneksi.php";
$username=$_GET['username'];
$query="DELETE FROM tb_login WHERE username='$username'";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
    ?>
    <script language="javascript">document.location.href="kelola-user.php";</script>
<?php
}else{
    echo "Gagal hapus data";
}
?>
