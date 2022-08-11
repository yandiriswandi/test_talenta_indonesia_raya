<?php

//include koneksi database
include('config/koneksi.php');

//get data dari form
$id             = $_POST['id'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$usia           = $_POST['usia'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE users SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', usia = '$usia' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>