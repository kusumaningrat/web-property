<?php
session_start();

if (!isset($_SESSION["login"])) {
    header('Location: pages/users/login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/commons/index.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.2.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.2.0-web/css/brands.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.2.0-web/css/solid.css">

    <title>Home</title>
</head>

<body>
    <nav class="navbar fixed" style="background-color: #143788;">
        <div class="container-fluid">
            <div class="logo">
                <img src="assets/img/commons/home.png" alt="" width="50px" style="margin-left: 15px;">
            </div>
            <ul class="nav" style="margin-right: 20px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
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
                    <a class="nav-link" href="controller/users/logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content">
        <div class="img-content">
            <img src="assets/img/commons/img1.png" alt="" width="100%" height="700px">
        </div>
    </div>

    <div class="content bg-blue">
        <div class="container">
            <form class="row g-3 mt-3 center">
                <div class="col-auto" style="margin-left: 30px;margin-right: 30px;">
                    <p style="color: white;font-style: italic;">Search<br>
                        <b style="text-decoration: none;">PROPERTY</b>
                    </p>
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" id="semua_lokasi" placeholder="Semua Lokasi">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" id="tipe" placeholder="Type">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" id="kamar_tidur" placeholder="Kamar Tidur">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" id="kamar_mandi" placeholder="Kamar Mandi">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-warning mb-3 "><i class="fa fa-search" style="padding: 2px"></i>Cari</button>
                </div>
            </form>
        </div>

        <div class="container-fluid" style="background-color: #dddddd; width: 98%;">
            <div class="d-flex justify-content-around row row-cols-3" style="color: #2d4d75; padding: 6px;">
                <div class="col hide-m">FEATURED PROPERTY</div>
                <div class="col">SEWA PROPERTY</div>
                <div class="col">JUAL PROPERTY</div>
            </div>
        </div>
    </div>

    <div class="container mt-3" style="width: 98%;">
        <div class="flex-center-m d-flex justify-content-around row row-cols-3" style="color: #2d4d75; padding: 6px;">
            <div class="col hide-m">
                <div class="card-right" style="height: 370px;">
                    <img src="./assets/img/commons/rumah.jpg" class="card-img" alt="...">
                    <div class="card-title-right">
                        <p style="font-weight: bold;color: #c9c60e;">Rp. 200.000.000</p>
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            Makasar
                        </p>
                        <h5>Jual tanah kota Makasar</h5>
                        <p style="font-weight:200;">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat sapiente possimus culpa eaque
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3" style="border: none;border-radius: 0%;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body margin-5" style="font-weight: bold;">
                                <p class="card-text">Rp. 80.000.000</p>
                                <h5 class="card-title" style="margin-top: 10px;">Sewa rumah lantai di rest area</h5>
                                <div class="card-desc" style="font-weight: 500;font-size: 12px;">
                                    <p>
                                        <i class="fa-solid fa-location-pin"></i>
                                        Sumber Jaya
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-folder"></i>
                                        LT : 1000 m2
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-house"></i>
                                        LB : 90 m2
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./assets/img/commons/rumah.jpg" class="img-fluid" alt="..." style="height: 100%;object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: 540px;border: none;border-radius: 0%;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body margin-5" style="font-weight: bold;">
                                <p class="card-text">Rp. 80.000.000</p>
                                <h5 class="card-title" style="margin-top: 10px;">Sewa rumah lantai di rest area</h5>
                                <div class="card-desc" style="font-weight: 500;font-size: 12px;">
                                    <p>
                                        <i class="fa-solid fa-location-pin"></i>
                                        Sumber Jaya
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-folder"></i>
                                        LT : 1000 m2
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-house"></i>
                                        LB : 90 m2
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./assets/img/commons/rumah.jpg" class="img-fluid" alt="..." style="height: 100%;object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3 bg-blue" style="max-width: 540px;border: none;border-radius: 0%;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body margin-5" style="font-weight: bold;">
                                <p class="card-text">Rp. 80.000.000</p>
                                <h5 class="card-title" style="margin-top: 10px;">Sewa rumah lantai di rest area</h5>
                                <div class="card-desc" style="font-weight: 500;font-size: 12px;">
                                    <p>
                                        <i class="fa-solid fa-location-pin"></i>
                                        Sumber Jaya
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-folder"></i>
                                        LT : 1000 m2
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-house"></i>
                                        LB : 90 m2
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./assets/img/commons/rumah.jpg" class="img-fluid" alt="..." style="height: 100%;object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div class="card mb-3 bg-blue" style="max-width: 540px;border: none;border-radius: 0%;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body margin-5" style="font-weight: bold;">
                                <p class="card-text">Rp. 80.000.000</p>
                                <h5 class="card-title" style="margin-top: 10px;">Sewa rumah lantai di rest area</h5>
                                <div class="card-desc" style="font-weight: 500;font-size: 12px;">
                                    <p>
                                        <i class="fa-solid fa-location-pin"></i>
                                        Sumber Jaya
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-folder"></i>
                                        LT : 1000 m2
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-house"></i>
                                        LB : 90 m2
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./assets/img/commons/rumah.jpg" class="img-fluid" alt="..." style="height: 100%;object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="assets/js/bootstrap.min.js"></script>

</html>