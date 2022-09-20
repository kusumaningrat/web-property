<?php
    require('../../database/db.php');

    if (isset($_POST['simpan'])) {
        $type_rumah = mysqli_escape_string($db, $_POST['type_rumah']);
        $blok_rumah = mysqli_escape_string($db, $_POST['blok_rumah']);
        $luas_tanah = mysqli_escape_string($db, $_POST['luas_tanah']);
        $harga = mysqli_escape_string($db, $_POST['harga']);
        $status = mysqli_escape_string($db, $_POST['status']);
     
     
        $insert = mysqli_query($db, "INSERT INTO rumah VALUES(NULL, '$type_rumah', '$blok_rumah', '$luas_tanah', '$harga', '$status')");
     
        if(mysqli_num_rows($get) > 0) {
            echo "<script>
                    alert('Akun telah terdaptar, gunakan akun lain');
                    document.location='../../pages/users/register.php';
                </script>";
        }else{
            if($insert){
                echo "<script>
                    alert('Berhasil menambahkan data');
                    document.location='../../pages/admin/pages/rumah.php';
                    </script>";
            }else{
                echo "<script>
                    alert('Gagal menambahkan data');
                    document.location='../../pages/admin/pages/rumah.php';
                    </script>";
            }
        }
    }


?>