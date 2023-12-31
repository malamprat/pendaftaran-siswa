<?php

$server = "sql111.infinityfree.com";
$user = "if0_35697731";
$password = "sncb417r";
$nama_database = "if0_35697731_pendaftaran_siswa";
$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>