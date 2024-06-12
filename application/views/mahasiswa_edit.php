<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Mahasiswa Oleh Ahmad Rosyad - 2110020078</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-image: url('https://source.unsplash.com/random');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <h1 class="text-center mb-4">Form Edit Mahasiswa</h1>
                <form action="<?= site_url('mahasiswa/perbaharui/' . $mahasiswa->id_mahasiswa) ?>" method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="<?= $mahasiswa->NIM ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_mhs">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" value="<?= $mahasiswa->nama_mhs ?>">
                    </div>
                    <div class="form-group">
                        <label for="id_prodi">Program Studi</label>
                        <select class="form-control" name="id_prodi" id="id_prodi" required>
                            <option value="">Pilih Program Studi</option>
                            <?php foreach ($prodi as $ps) : ?>
                                <option value="<?= $ps->id_prodi ?>" <?= $mahasiswa->id_prodi == $ps->id_prodi ? 'selected' : '' ?>>
                                    <?= $ps->nama_prodi ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type=" submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>