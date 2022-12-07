<?php
//form edit atau update
include "koneksi.php";
$username=$_GET['username'];
$query="SELECT * FROM tb_login WHERE username='$username'";
$hasil=mysqli_query($conn,$query);
$data=mysqli_fetch_array($hasil);
?>
    <form method="post" action="proses_update.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" value="<?php echo $data['username'];?>" readonly="readonly"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" value="<?php echo $data['password'];?>"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>:</td>
                <td><input type="password" name="level" value="<?php echo $data['level'];?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="SUBMIT"></td>
                <td><input type="reset" name="reset" value="RESET"></td>
            </tr>
        </table>
    </form>
