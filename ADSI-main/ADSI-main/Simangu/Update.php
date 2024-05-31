<?php

include('dbconnect.php');
$id = $_GET['id'];
$kode = $_GET['id-barang'];
$kategori = $_GET['kategori'];
$Nama = $_GET['nama-barang'];
$tanggal = $_GET['tanggal-masuk'];

$query = "UPDATE manajemen SET Nama_barang='$Nama' , Kode_barang='$kode', Tanggal_masuk='$tanggal', Kategori='$kategori' WHERE id='$id' ";

if(mysqli_query($conn, $query)){
    header("location:mengelola.php");
}
else{
    echo "ERROR, data gagal dihapus ",mysqli_error($conn);
}

mysqli_close($conn);
?>
