<?php

$host = "sql202.byethost32.com";
$user = "b32_41094846";
$password = "bagasganteng";
$db = "b32_41094846_companyprofile";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon) {
    die("Koneksi Gagal". mysqli_connect_error());
}
?>