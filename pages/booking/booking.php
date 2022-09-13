<?php
 require('../../database/db.php');

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
                    <a class="nav-link" href="./pages/booking/booking.php">BOOKING</a>
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
    <div class="container" >
    <section class="main-left">
        <img src="../../assets/img/commons/img1.png" alt="" class="imgs">
    </section>
    <section class="main-right">
        <br>
        <h4>Menampilkan Data Perumahan</h4>

        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
        <div class="form-group">
            <label for="sel1">Select list:</label>
            <select class="form-control" name="nama_blok">
            <option value="first">Pilih Blok</option> <!-- Penambahan baris kode option-->
                <?php
                include "../../controller/booking/filter.php";
                //Perintah sql untuk menampilkan semua data pada tabel perumahan
                $sql = "select * from tbl_perumahan";

                $hasil = mysqli_query($db,$sql);
                $no=0;
                while ($data = mysqli_fetch_array($hasil)) {
                $no++;

                $ket="";
                if (isset($_GET['nama_blok'])) {
                    $perumahan = trim($_GET['nama_blok']);

                    if ($perumahan==$data['kode_perumahan'])
                    {
                        $ket="selected";
                    }
                }
                ?>
                <option <?php echo $ket; ?> value="<?php echo $data['kode_perumahan'];?>"><?php echo $data['nama_perumahan'];?></option>
                <?php
        }
        ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="Pilih" name="submit"><!-- Penambahan baris kode name -->
        </div>
        </form>

        <table class="table table-bordered table-hover">
            <br>
            <thead style="text-align:center ;">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Blok</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <?php

            if(isset($_GET['submit'])){ // Penambahan baris kode if submit 
                if (isset($_GET['nama_blok'])) {
                    $perumahan=trim($_GET['nama_blok']);
                    $sql="select * from tbl_detail_perumahan where blok='$perumahan' order by id asc";
                }else {
                    $sql="select * from tbl_detail_perumahan order by id asc";
                }
    
                $hasil=mysqli_query($db,$sql);
                $no=0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
    
                    ?>
                    <tbody style="text-align: center;">
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data["id"]; ?></td>
                        <td><?php echo $data["nama"];   ?></td>
                        <td ><?php echo $data["blok"];   ?></td>
                        <td>
                        <a href="form_booking.php?id=<?= $data['id']; ?>" class="btn btn-info">B</a>
                            <input type="submit" class="btn btn-warning" value="U">
                            <input type="submit" class="btn btn-danger" value="D">
                            </td>
                    </tr>
                    </tbody>
                    <?php
                }
            } else{ ?>

                <div class="alert alert-danger" role=""alert><?php echo "Silahkan Pilih Blok"; ?></div> <!-- Penambahan baris kode alert -->
                    
            <?php } ?>

            
        </table>
    </section>
</div>
</body>

</html>