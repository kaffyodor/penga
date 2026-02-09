<?php

$server = "localhost";
$host = "root";
$pass = "";
$db_name = "p_sekolah";

$koneksi = mysqli_connect($server, $host, $pass, $db_name);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


?>