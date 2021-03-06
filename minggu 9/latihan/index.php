<?php
require 'model.php';
$aksesModel = new Model();
$index = 1;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" type="text/css" href="assets/css/css.css"> 
</head>

<body>
    <div class="header">
    <div class="big-logo"></div> 
    <?php include 'menu.php';?> 
    </div> 
    <div class="content">
    <div class="container"> 
    <br><br><a class="btn pull-right" href="tambah-data.php">Tambah Data Baru</a> 
    <h2>Data Mahasiswa</h2>
    <div style="clear:both">&nbsp;</div>      
    <table class="data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama </th>
                <th>Kelas</th>
                <th>Prodi</th>
                <th>Fakultas</th>
                <th>Gender</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <!--  -->
        <tbody>
            <?php
            $hasil = $aksesModel->tampil_data();
            if (!empty($hasil)) {
                foreach ($hasil as $data) : ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $data->nim ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->kelas ?></td>
                        <td><?= $data->prodi ?></td>
                        <td><?= $data->fakultas ?></td>
                        <td><?= $data->gender ?></td>
                        <td>
                            <a name="edit" id="edit" href="edit.php?id=<?= $data->nim ?>">Edit</a>
                        </td>
                        <td>
                            <a name="hapus" id="hapus" href="proses.php?id=<?= $data->nim ?>">Hapus</a>                        
                        </td>
                    </tr>
                <?php endforeach;
            } else {
                ?>
                <tr>
                    <td colspan="9">Data Empty</td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
    </div>
    </div>
</body>

</html>