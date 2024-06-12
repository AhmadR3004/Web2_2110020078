<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa oleh Ahmad Rosyad - 2110020078</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Selamat datang di web Ahmad Rosyad</h1>
        <a href="<?= site_url('mahasiswa/tambah') ?>" class="btn btn-primary btn-sm">Tambah Data Mahasiswa</a>
        <a href="<?= site_url('mahasiswa/cetak') ?>" class="btn btn-success btn-sm">Cetak Data Mahasiswa</a>
        <hr>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark" align="center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody align="center">
                <?php
                $no = 1;
                foreach ($mahasiswa as $row) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->NIM ?></td>
                        <td><?= $row->nama_mhs ?></td>
                        <td><?= $row->nama_prodi ?></td>
                        <td>
                            <a href="<?= site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?= site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>