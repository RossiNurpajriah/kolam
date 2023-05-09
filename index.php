<?php
    require "koneksi.php";  

    $query          = mysqli_query($koneksi, "SELECT * FROM petugaskolam ");
?>

<html>
    <head>
        <title>identitas</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <h1 >  </h1>

        <a href="tambah.php"> data Petugas Kolam </a>
        <P></P>
        <table border="1"> 
            <tr>
                <td>id</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Agama</td>
                </tr>
            <?php $no = 1; ?>
            <?php while ($ambilData = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $no++; ?></td>    
                <td><?= $ambilData['id']; ?></td>    
                <td><?= $ambilData['nama']; ?></td>    
                <td><?= $ambilData['alamat']; ?></td>    
                <td><?= $ambilData['agama']; ?></td>    
                <td>
                        <a href="edit.php?id=<?= $ambilData['id'] ; ?>"> edit </a> | 
                        <a href="hapus.php?id=<?= $ambilData['id'] ; ?>"> hapus </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        
    </body>
</html>