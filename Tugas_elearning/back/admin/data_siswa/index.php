
    <div class="col-md-10 offset-1">
        <div class="d-flex justify-content-between">
            <h4>Data User</h4>
            <a href="index.php?page=siswa_create" class="btn btn-success">Tambah</a>
        </div><hr>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Tingkat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM siswa");
                $no = 1;
                if (mysqli_num_rows($query) > 0) {
                foreach ($query as $data) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['username'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['tingkat'] ?></td>
                    <td>
                <div class="btn-group">
                    <a href="index.php?page=siswa_edit&id=<?= $data['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="index.php?page=siswa_delete&id=<?= $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Delete</a>
                </div>
                    </td>
                </tr>
            <?php
                }
                } else {
                 ?>
                    <tr>
                        <td colspan="5">
                            <div class="alert alert-danger">Tidak ada data</div>
                        </td>
                    </tr>
                <?php
                }
                ?>
        </tbody>
        </table>
    </div>