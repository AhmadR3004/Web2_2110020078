<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa oleh Ahmad Rosyad (2110020078)</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center text-dark mb-4">Selamat datang di web Ahmad Rosyad</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if (isset($rowarray)) : ?>
                    <div class="card">
                        <div class="card-body text-center">
                            <?php echo "Nama Saya {$rowarray['nama_mhs']} dan NIM Saya {$rowarray['NIM']}"; ?>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="alert alert-warning text-center" role="alert">
                        Data mahasiswa tidak tersedia.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>