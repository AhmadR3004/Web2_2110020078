<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Prodi Oleh Ahmad Rosyad - 2110020078</title>
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
                <h1 class="text-center mb-4">Form Edit Prodi</h1>
                <form action="<?= site_url('prodi/perbaharui/' . $prodi->id_prodi) ?>" method="post">
                    <div class="form-group">
                        <label for="kode_prodi">Kode Prodi</label>
                        <input type="text" class="form-control" name="kode_prodi" id="kode_prodi" value="<?= $prodi->kode_prodi ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_prodi">Nama Prodi</label>
                        <input type="text" class="form-control" name="nama_prodi" id="nama_prodi" value="<?= $prodi->nama_prodi ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
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