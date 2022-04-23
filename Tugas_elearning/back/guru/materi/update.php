<?php
    include 'koneksi.php';

    $id_materi = $_GET['id_materi'];
    $sqlGet = "SELECT * FROM materi WHERE id_materi='$id_materi'";
    $queryGet = mysqli_query ($koneksi, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Materi</title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-3">
        <a href="index.php">Kembali</a>
        <form action="index.php?materi_update" method="post">
            <label for="id_materi">Id Materi</label>
            <input type ="text" id="id_materi" name="id_materi" value="<?php echo "$data[id_materi]";?>" class="form-control" readonly>

            <label for="nip">NIP</label>
            <input type="text" id="nip" name="nip" value="<?php echo "$data[nip]";?>"class="form-control" required>

            <label for="kelas_id">Kelas Id</label>
            <input type="text" id="kelas_id" name="kelas_id" value="<?php echo "$data[kelas_id]";?>" class="form-control" readonly>

            <label for="nama_guru">Nama Guru</label>
            <input type="text" id="nama_guru" name="nama_guru" value="<?php echo "$data[nama_guru]";?>" class="form-control" required>

            <label for="nama_mapel">Nama Mapel</label>
            <input type="text" id="nama_mapel" name="nama_mapel" value="<?php echo "$data[nama_mapel]";?>" class="form-control" required>

            <label for="video">Video</label>
            <input type="file" id="video" name="video" value="<?php echo "$data[video]";?>" class="form-control" required>

            <label for="deskripsi">Deskripsi</label>
            <input type="text" id="deskripsi" name="deskripsi" value="<?php echo "$data[deskripsi]";?>" class="form-control" required>

            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" value="<?php echo "$data[kelas]";?>" class="form-control" required>

            <input class="btn btn-success mt-3" type="submit" name="update" value="Update Materi">
        </form>
    </div>

    <?php

    if(isset($_POST['update'])) {
            $id_materi = $_POST['id_materi'];
            $nip = $_POST['nip'];
            $kelas_id = $_POST['kelas_id'];
            $nama_guru = $_POST['nama_guru'];
            $nama_mapel = $_POST['nama_mapel'];
            $video = $_POST['video'];
            $deskripsi = $_POST['deskripsi'];
            $kelas = $_POST['kelas'];

        $sqlUpdate = "UPDATE materi
                    SET nip='$nip', kelas_id='$kelas_id', nama_guru='$nama_guru', nama_mapel='$nama_mapel', video'$video', deskripsi='$deskripsi', kelas='$kelas'
                    WHERE id_materi='$id_materi'";
        
        $queryUpdate = mysqli_query($koneksi, $sqlUpdate);
                    header("location: index.php");
    }
        ?>
</body>
</html>