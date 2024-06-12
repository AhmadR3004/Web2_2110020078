<!DOCTYPE html>

<head>
    <title>Mahasiswa oleh Ahmad Rosyad - 2110020078</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        @media print {
            body {
                font-size: 10px;
                padding: 0 20mm;
                /* Padding untuk memberikan area kosong di kiri dan kanan */
            }

            h1 {
                font-size: 18px;
                text-align: center;
                margin-bottom: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 0;
            }

            th,
            td {
                border: 1px solid #000;
                padding: 6px;
                text-align: left;
            }

            th {
                background-color: #ccc;
                -webkit-print-color-adjust: exact;
            }

            @page {
                size: A4;
                margin: 20mm 15mm;
                /* Margin halaman dengan area kosong kiri dan kanan */
            }
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->NIM ?></td>
                    <td><?= $row->nama_mhs ?></td>
                    <td><?= $row->nama_prodi ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>