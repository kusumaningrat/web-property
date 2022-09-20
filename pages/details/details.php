<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/commons/index.css">

    <link rel="stylesheet" href="../../assets/fontawesome-free-6.2.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="../../assets/fontawesome-free-6.2.0-web/css/brands.css">
    <link rel="stylesheet" href="../../assets/fontawesome-free-6.2.0-web/css/solid.css">
    <title>Booking</title>
</head>

<body>
    <nav class="navbar fixed" style="background-color: #143788;">
        <div class="container-fluid">
            <div class="logo">
                <img src="assets/img/commons/home.png" alt="" width="50px" style="margin-left: 15px;">
            </div>
            <ul class="nav" style="margin-right: 20px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../pages/booking/booking.php">BOOKING</a>
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
    <div class=" full-page" style="padding: 100px;">
        <div class="flexbox-x-bw full-page container">
            <div class="detail-gambar h-100 center-in" style="width: 100%;">
                <img src="../../assets/img/commons/rumah.jpg" class="w-100" />
            </div>
            <div class="detail-informasi full-page d-block">
                <h5 class="text-blue" style="font-weight: bold;">Jual tanah kota Makasar</h5>
                <p>Rp. 200.000.000</p>
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
                <div class="info-deskripsi container" style="background-color: white;border-radius: 5px;margin-top: 20px;">
                    <p style="text-align: justify;font-weight:500;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate maiores natus officiis ducimus! Dolorum fugit magni debitis, doloribus nam aperiam in dolorem temporibus iste quod dolores repudiandae cumque quos quidem!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate maiores natus officiis ducimus! Dolorum fugit magni debitis, doloribus nam aperiam in dolorem temporibus iste quod dolores repudiandae cumque quos quidem!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate maiores natus officiis ducimus! Dolorum fugit magni debitis, doloribus nam aperiam in dolorem temporibus iste quod dolores repudiandae cumque quos quidem!

                    </p>
                </div>
            </div>
            <div class="aksi-detail full-page center-in text-dark h-100" style="width: 80%;">
                <div>
                    <div class="view-cart block" style="border: 1px solid gray;padding:10px;border-radius:5px;width: 300px;">
                        <p>Tombol Aksi</p>
                        <div class="aksi-progress w-100 mt-2" style="display: inline;">
                            <p style="font-weight: 500;margin: 1px;">Masih tersedia</p>
                            <div class="w-100" style="height: 30px;border-radius: 5px;overflow: hidden;border: gray 1px solid;">
                                <div class="progress-bar" style="width: 70%;height: 100%;background-color: green;">

                                </div>
                            </div>
                        </div>
                        <div class="aksi-tombol w-100 mt-2" style="display: inline;">
                            <button type="submit" class="form-input-button bg-blue" style="width: 100px;">Booking</button>
                            <button type="submit" class="form-input-button bg-blue" style="width: 100px;background-color: rgb(201, 182, 17);">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>