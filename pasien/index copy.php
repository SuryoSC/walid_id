<?php
    require_once('./antrian.php');
    // $daftarAntrian = getDaftar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel</title>
    <style>
        table tr td{
            padding: 2px 10px;
        };
    </style>
</head>
<body>
    <a href="./form.php">Tambah Siswa</a>
    <table>
        <tr class="head">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Aksi</td>
        </tr>
    
    <?php
    foreach($daftarAntrian as $key => $daftar){;
    ?>
    
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $daftar['nama']; ?></td>
            <td><?php echo $daftar['keluhan']; ?></td>
            <td>
                <a href="./edit.php?id=<?php echo $daftar['id']?>">Edit</a>
                <a href="./aksi-hapus.php?id=<?php echo $daftar['id']?>">Hapus</a>
            </td>
        </tr>
           
    <?php
    }
    ?>
    </table> 
</body>
</html>