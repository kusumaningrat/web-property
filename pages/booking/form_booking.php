<?php
include('../../database/db.php');

$id = $_GET['id'];
$result = mysqli_query($db, "SELECT * FROM tbl_detail_perumahan WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Booking</title>

  <!-- Custom fonts for this template-->
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../assets/css/sb-admin-2.css" rel="stylesheet">
  <link href="../../assets/css/commons/index.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar fixed" style="background-color: #143788;">
    <div class="container-fluid">
      <div class="logo">
        <img src="../../assets/img/commons/home.png" alt="" width="50px" style="margin-left: 15px;">
      </div>
      <ul class="nav" style="margin-right: 20px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./booking.php">BOOKING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LOKASI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">BERITA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controller/users/logout.php">LOGOUT</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <section class="main-left">
      <img src="../../assets/img/commons/img1.png" alt="" class="imgs" style="margin-right: 50px;">
    </section>
    <section class="main-right">
      <br><br>

      <h4>Data Perumahan</h4>

      <form action="../../controller/booking/booking.php" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4">
          <label class="form-label" for="kode_blok">
            Kode Blok
          </label>
          <input type="text" id="kode_blok" name="kode_blok" class="form-control" value="<?= $row['id'] ?>" readonly/>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="nama_konsumen">
            Nama Konsumen
          </label>
          <input type="text" id="nama_konsumen" name="nama_konsumen" class="form-control" required placeholder="Masukan Nama Konsumen" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="alamat">
            Alamat
          </label>
          <input type="text" id="alamat" name="alamat" class="form-control" required placeholder="Masukan Alamat" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="no_handphone">
            No Handphone
          </label>
          <input type="text" id="no_handphone" name="no_handphone" class="form-control" required placeholder="Masukan No Handphone" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="no_handphone">
            Uang Booking
          </label>
          <input type="text" id="uang_booking" name="uang_booking" class="form-control" required placeholder="Masukan Uang Booking" />
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="booking">
            Booking
          </button>
        </div>
      </form>
    </section>
  </div>
</body>
</html>