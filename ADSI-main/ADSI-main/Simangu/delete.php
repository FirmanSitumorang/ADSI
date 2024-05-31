<?php

$id = $_GET['id'];

include('dbconnect.php');

$query = "DELETE FROM manajemen WHERE id = '$id'";

if (mysqli_query($conn, $query)){
    header("location:mengelola.php");

}
else{
    echo "ERROR, data gagal dihapus ",mysqli_error($conn);
}

mysqli_close($conn);
?>