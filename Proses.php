<?php
require('koneksi.php');

$jenis_buket = $_POST['jenis_buket'];
$tema = isset($_POST['tema']) ? implode(",", $_POST['tema']) : '';
$size = $_POST['size'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$sql = "INSERT INTO product (jenis_buket, tema, size, harga, deskripsi)
        VALUES ('$jenis_buket', '$tema', '$size', '$harga', '$deskripsi')";

if($conn->query($sql) === TRUE){
    echo "Buket berhasil disimpan!";
} else {
    echo "Error: " . $conn->error;
}
?>