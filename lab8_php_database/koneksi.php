<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan1";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
    echo "koneksi e server gagal.";
    die();
} else echo "koneksi berhasil";
?>