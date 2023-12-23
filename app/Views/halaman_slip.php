<!DOCTYPE html>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Slip Gaji</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Karyawan<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('/jadwal') ?>">Hari Kerja & Jam Masuk Kerja</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container">
    <a href="<?php echo site_url('/dashboard/print/download') ?>" class="btn btn-primary">  
    Unduh PDF  
        </a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gaji</th>
                    <th>Jumlah Absensi</th>
                    <th>Denda Keterlambatan</th>
                    <th>Gaji Didapat</th>
                </tr>
            </thead>
            <tbody>
                <td><?= $printable['nama'] ?></td>
                <td><?= $printable['gaji'] ?></td>
                <td><?= $printable['jumlah_absensi'] ?></td>
                <td><?= $printable['denda_keterlambatan'] ?></td>
                <td><?= $printable['gaji_didapat'] ?></td>
            </tbody>
        </table>
       
    </div>
</body>
</html>