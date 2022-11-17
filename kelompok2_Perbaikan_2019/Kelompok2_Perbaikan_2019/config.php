<?php 

$server = "localhost";
$username = "root";
$password = "";
$db_name = "toko_kue";

$koneksi = mysqli_connect($server, $username, $password, $db_name);

if(!$koneksi){
    die("Gagal terhubung");
}
