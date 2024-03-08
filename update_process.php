<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$warna = $_POST['warna'];
$rasa = $_POST['rasa'];

$connection  = mysqli_connect("localhost", "admin", "adminoke", "tokobuah");
$update = mysqli_query($connection, "UPDATE buah SET nama='$nama', warna='$warna', rasa='$rasa' WHERE id=$id ");

if ($update) {
    header('Location: index.php');
}
else{
    echo  "insert ke database gagal.";
}