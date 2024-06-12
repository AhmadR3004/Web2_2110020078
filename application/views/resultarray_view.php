<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa oleh Ahmad Rosyad (2110020078)</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Selamat datang di web Ahmad Rosyad</h1>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($resultArray as $row) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['NIM'] ?></td>
                        <td><?= $row['nama_mhs'] ?></td>
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