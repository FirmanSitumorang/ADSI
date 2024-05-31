<?php

include('dbconnect.php');

$kode = $_POST['id-barang'];
$kategori = $_POST['kategori'];
$Nama = $_POST['nama-barang'];
$tanggalm = $_POST['tanggal-masuk'];
$tanggalk = $_POST['tanggal-keluar'];

$query = "INSERT INTO manajemen(Nama_barang, Kode_barang,Tanggal_masuk, Tanggal_keluar, Kategori) VALUES('$Nama', '$kode',$tanggalm, '$tanggalk', '$kategori')";

if(mysqli_query($conn, $query)){
    header("location:mengelola.php");
}
else{
    echo "ERROR, data gagal dihapus ",mysqli_error($conn);
}

mysqli_close($conn);
?>
