<?php
    include "../koneksi.php";
    if (isset($_POST['beli'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $tipe = $_POST['tipe'];
        $warna = $_POST['warna_brg'];
        $memory = $_POST['memory'];
        $jml = $_POST['banyak'];
        
        $koneksi->query("INSERT INTO pembelian (nama,alamat,no_telp,email,tipe_brg,warna,memory,jumlah) 
        VALUES ('$nama','$alamat','$telp','$email','$tipe','$warna','$memory','$jml')") or
                die($koneksi->error);
    }
    header("location:index.php?pesan=input");
?>