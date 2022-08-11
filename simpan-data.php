<?php

//include koneksi database
include('config/koneksi.php');

//get data dari form
$nama         = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$usia      = $_POST['usia'];

//query insert data ke dalam database
$query = "INSERT INTO users (nama, jenis_kelamin, usia) VALUES ('$nama', '$jenis_kelamin', '$usia')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>