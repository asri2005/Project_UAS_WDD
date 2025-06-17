<?php
    $Open = mysqli_connect("localhost:3306","root","");
        if (!$Open){
            die ("Koneksi ke Engine MySQL Gagal !<br>");
        }
    $Koneksi = mysqli_select_db($Open,"db_wikipedia");
        if (!$Koneksi){
            die ("Koneksi ke Database Gagal !");
        }
?>

