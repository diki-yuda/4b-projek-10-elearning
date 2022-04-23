<?php
    include 'koneksi.php';

    $id_materi = $_GET['id_materi'];
    $sqlDelete = "DELETE FROM materi WHERE id_materi='$id_materi'";
    mysqli_query($koneksi, $sqlDelete);

    header("location: index.php");
    ?>