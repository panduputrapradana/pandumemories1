<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url('assets/logo/logo.jpeg'); ?>" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #table {
                border-collapse: collapse;
                width: 100%;
                font-size: 12px;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #table tr:nth-child(even){background-color: #f2f2f2;}
            #table tr:hover {background-color: #ddd;}
            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #ead09a;
                color: black;
            }
        </style>
        <title>Laporan</title>
    </head>
    <body>
        <div style="text-align:center">
            <p style="font-size: 25px; font-weight: bold;">Laporan Pendaftaran</p>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Lulusan</th>
                    <th>Data Keikutsertaan</th>
                    <th>Ukuran Kaos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; 
                foreach ($daftar as $row) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->nama_lengkap; ?></td>
                        <td><?= $row->lulusan; ?></td>
                        <td><?= $row->data; ?></td>
                        <td><?= $row->ukuran; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>