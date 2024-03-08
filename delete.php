<?php

$id = $_GET['id'];

$connection  = mysqli_connect("localhost", "admin", "adminoke", "tokobuah");
$delete = mysqli_query($connection, "DELETE FROM buah WHERE id='$id' ");

if ($delete) {
    header('Location: index.php');
}
else{
    echo  "hapus ke database gagal.";
}