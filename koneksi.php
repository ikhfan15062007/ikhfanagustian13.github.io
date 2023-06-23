<?php
    $db = mysqli_connect("localhost","root","","db_masjid");
    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $total_dana = []; 
        while($th = mysqli_fetch_assoc($result)){
            $total_dana[]=$th;
        }
        return $total_dana;
    };
    function tambah($data){
        global $db;
        $nama_donatur = htmlspecialchars($data["nama_donatur"]);
        $paket = htmlspecialchars($data["paket"]);
        $kategori = htmlspecialchars($data["kategori"]);
        $nominal = htmlspecialchars($data["nominal"]);
        $query = "INSERT INTO data_donatur
        VALUES
        ('','$nama_donatur','$paket',
        '$kategori','$nominal') ";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
    };