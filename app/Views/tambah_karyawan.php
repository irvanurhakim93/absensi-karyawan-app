<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login</title>
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
        <h3>Master Data Karyawan</h3>
        <br>
    <form method="POST" action="<?= site_url('/dashboard/post') ?>" id="karyawanForm">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Gaji</label>
    <input type="text" name="gaji" class="form-control" id="gaji" placeholder="Masukkan nominal gaji">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Absensi</label>
    <input type="text" name="jumlah_absensi" class="form-control" id="jumlah_absensi" placeholder="Jumlah berapa hari karyawan tidak masuk / absen">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Denda keterlambatan</label>
    <input type="text" name="denda_keterlambatan" class="form-control" id="denda_keterlambatan" placeholder="Masukkan nominal denda per karyawan absen">
  </div>
  <div class="form-group">
  <input type="hidden" name="gaji_didapat" id="hasil" class="form-control" >
  </div>
  <button type="button" onclick="perhitunganAndSubmit()" class="btn btn-success">Submit</button>
</form>



<script>
  function perhitunganAndSubmit() {
    var gaji = document.getElementById("gaji").value;
    var absen = document.getElementById("jumlah_absensi").value;
    var denda = document.getElementById("denda_keterlambatan").value;
    var bersih = document.getElementById("hasil").value;

    // var result = gaji - absen * denda;

    // document.getElementById("hasil").value = result;

    // document.getElementById("karyawanForm").submit();

    if (!isNaN(gaji) && !isNaN(absen) && !isNaN(denda)) {
            var result = gaji - absen * denda;

            document.getElementById("hasil").value = result;

            document.getElementsByName("gaji_didapat")[0].value = result;

            // Submit the form
            document.getElementById("karyawanForm").submit();
          } else {
            alert("Invalid input. Please enter numeric values for Gaji, Absensi, and Denda.");
          }
  }
</script>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>