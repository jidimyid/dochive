<?php
//detail
include "koneksi.php";
$username=$_GET['username'];
$query="SELECT * FROM tb_login WHERE username='$username'";
$hasil=mysqli_query($conn, $query);
$data=mysqli_fetch_assoc($hasil);
?>
<table class="table table-striped table-sm">
        <tr>
            <td><?= $data['username'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['level'] ?></td>
        </tr>
</table>