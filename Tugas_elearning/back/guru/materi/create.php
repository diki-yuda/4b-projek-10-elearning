<?php
    include "koneksi.php";
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Materi</title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-3">
    <div class='row'>
    <div class='col d-flex justify-content-left'>
    <a href='index.php' class='btn btn-sm btn-primary'>Kembali</a>
    </div>
        <form action="index.php?page=materi_create" method="post">
            <label for="id_materi">Id Materi</label>
            <input type="text" id="id_materi" name="id_materi" class="form-control" required>

            <label for="nip">NIP</label>
            <input type="text" id="nip" name="nip" class="form-control" required>

            <label for="kelas_id">Kelas Id</label>
            <input type="text" id="kelas_id" name="kelas_id" class="form-control" required>

            <label for="nama_guru">Nama Guru</label>
            <input type="text" id="nama_guru" name="nama_guru" class="form-control" required>

            <label for="nama_mapel">Nama Mapel</label>
            <input type="text" id="nama_mapel" name="nama_mapel" class="form-control" required>

            <label for="video">Video</label>
            <input type="file" id="video" name="video" class="form-control" required>

            <label for="deskripsi">Deskripsi</label>
            <input type="text" id="deskripsi" name="deskripsi" class="form-control" required>

            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" class="form-control" required>

            <input class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Materi">
        </form>
    </div>

    <?php

    if(isset($_POST['tambah'])) {
        $id_materi = $_POST['id_materi'];
        $nip = $_POST['nip'];
        $kelas_id = $_POST['kelas_id'];
        $nama_guru = $_POST['nama_guru'];
        $nama_mapel = $_POST['nama_mapel'];
        $video = $_POST['video'];
        $deskripsi = $_POST['deskripsi'];
        $kelas = $_POST['kelas'];
    
        $sqlGet = "SELECT * FROM materi WHERE id_materi='$id_materi'";
        $queryGet = mysqli_query($koneksi, $sqlGet);
        $cek = mysqli_num_rows($queryGet);

        $sqlInsert = "INSERT INTO materi (id_materi, nip, kelas_id, nama_guru, nama_mapel, video, deskripsi, kelas)
                      VALUES ('$id_materi', '$nip', '$kelas_id', '$nama_guru', '$nama_mapel', '$video', '$deskripsi', '$kelas')";

        $queryInsert = mysqli_query($koneksi, $sqlInsert);

        if (isset($sqlInsert) && $cek <= 0) {
            echo "
            <div class='alert alert-success'>Data berhasil ditambahkan <a href ='index.php'>Lihat data</a></div>
            ";
        }   else if ($cek > 0) {
            echo"
            <div class='alert alert-danger'>Data gagal ditambahkan <a href='index.php'>Lihat data</a></div>
            ";
        }
            
    }
        ?>
</body>

</html>