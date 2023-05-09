<?php

    require "koneksi.php";

?>

<html>
    <head>
        <title>tambah data petugas kolam</title>
    </head>

    <body>
        <h1>Tambah Data Petugas Kolam</h1>

        <form method="post" action="tambahAksi.php">
        <table>
			<tr>
				<td>id</td>
				<td><input type="number" name="id"></td>
			</tr>
			<tr>
				<td>Nama Petugas</td>
				<td><input type="text" name="nama"></td>
			</tr>
            <tr>
				<td>Alamat Petugas</td>
				<td><input type="text" name="alamat"></td>
			</tr>
            <tr>
				<td>Agama</td>
				<td><input type="text" name="agama"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
        </form>
    </body>
</html>