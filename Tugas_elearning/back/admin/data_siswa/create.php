
    <div class="col-md-10 offset-1">
        <div class="d-flex justify-content-between">
            <h4>Tambah Siswa</h4>
        </div>
        <form action="index.php?page=siswa_store" method="post">
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-2">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="writer">Writer</option>
                </select>
            </div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-success">
        </form>
    </div>