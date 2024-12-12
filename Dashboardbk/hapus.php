<?php include 'koneksi.php';
$nm = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM buku WHERE id='$nm'");
header("location:dashboard.php");

echo '<script type ="text/JavaScript">';
echo 'alert("Lanjutkan")';
echo '</script>';
