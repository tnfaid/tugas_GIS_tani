<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "database_sistem";

$koneksi = mysql_connect($host, $user, $pass, $database) or die("Koneksi ke database gagal!");
mysql_select_db($database, $koneksi) or die("Tidak ada database yang dipilih!");
?>