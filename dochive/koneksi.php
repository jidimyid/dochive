<?php
//koneksi database
$host="localhost";
$user="root";
$password="";
$database="db_dochive";
$conn=mysqli_connect($host,$user,$password,$database);
if (!$conn) {
    echo "KONEKSI DATABASE GAGAL";
}
?>