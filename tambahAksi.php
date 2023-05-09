<?php

require "koneksi.php";

// ambil name dari file tambah data
$id             = $_POST['id'];
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$agama          = $_POST['agama'];

// input data siswa
$input = mysqli_query($koneksi, "INSERT INTO petugaskolam VALUES ('$id', '$nama', '$alamat', '$agama') ");

header("location:index.php");
?>