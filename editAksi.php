<?php

require "koneksi.php";

// ambil name dari file tambah data
$id        = $_POST['id'];
$nama      = $_POST['nama'];
$alamat          = $_POST['alamat'];
$agama    = $_POST['agama'];

// input data petugas
$input = mysqli_query($koneksi, "UPDATE petugaskolam SET 
                                nama = '$nama',
                                alamat = '$alamat',
                                agama = '$agama' WHERE id = '$id'");

header("location:index.php");
?>