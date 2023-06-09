<?php

require 'functions.php';

    if(isset($_POST["input"])) {

        $judul = $_POST["judul"];
        $pengarang = $_POST["pengarang"];
        $tahun_terbit = $_POST["tahun_terbit"];

        $result = mysqli_query($conn, "INSERT INTO data_buku VALUES (NULL, '$judul', '$pengarang','$tahun_terbit')");

        if($result) {
            header('location:index.php');
            return mysqli_affected_rows($conn);
            // cek tabel food ->data sudah masuk
        }
        
    }
?>