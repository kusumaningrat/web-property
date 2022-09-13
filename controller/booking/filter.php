<?php

    $db = mysqli_connect("localhost","root","","property");

    $sql = mysqli_query($db, "SELECT MAX(nama) as maxID from tbl_detail_perumahan");
    $data = mysqli_fetch_array($sql);

    $kode = $data['maxID'];

    $kode++;
    $ket = "";
    $kodeauto = $ket . sprintf("%01s",$kode);

    $kodeauto;

?>