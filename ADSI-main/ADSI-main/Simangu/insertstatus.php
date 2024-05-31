<?php

include('dbconnect.php');

$kode = $_POST['id-barang'];
$Nama = $_POST['nama-barang'];
$tanggal = $_POST['tanggal-masuk'];
$lokasi = $_POST['lokasi'];

$query = "INSERT INTO statuspesanan(Nama_barang, Kode_barang, Tanggal_masuk,lokasi) VALUES('$Nama', '$kode', '$tanggal', '$lokasi')";

if(mysqli_query($conn, $query)){
    header("location:statusbarang.php");
}
else{
    echo "ERROR, data gagal dihapus ",mysqli_error($conn);
}

mysqli_close($conn);
?>
