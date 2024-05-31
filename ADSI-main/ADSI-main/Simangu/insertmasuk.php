<?php

include('dbconnect.php');

$kode = $_POST['id-barang'];
$kategori = $_POST['kategori'];
$Nama = $_POST['nama-barang'];
$tanggal = $_POST['tanggal-masuk'];

$query = "INSERT INTO manajemen(Nama_barang, Kode_barang, Tanggal_masuk, Kategori) VALUES('$Nama', '$kode', '$tanggal', '$kategori')";

if(mysqli_query($conn, $query)){
    header("location:mengelola.php");
}
else{
    echo "ERROR, data gagal dihapus ",mysqli_error($conn);
}

mysqli_close($conn);
?>
