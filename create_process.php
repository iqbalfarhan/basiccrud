<?php

$nama = $_POST['nama'];
$warna = $_POST['warna'];
$rasa = $_POST['rasa'];

$connection  = mysqli_connect("localhost", "admin", "adminoke", "tokobuah");
$insert = mysqli_query($connection, "INSERT INTO buah (nama,warna,rasa) VALUES ('$nama', '$warna', '$rasa') ");

if ($insert) {
    header('Location: index.php');
}
else{
    echo  "insert ke database gagal.";
}