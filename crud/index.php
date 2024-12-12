<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db      = "pengunjung";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { // cek koneksi
    die("Tidak bisa terkoneksi ke database");
} else {
    echo "Koneksi berhasil";
}
