<?php
    include "../../koneksi.php";
    $id = 0;
    if (isset($_POST['edit'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $tipe = $_POST['tipe'];
        $warna = $_POST['warna_brg'];
        $memory = $_POST['memory'];
        $jml = $_POST['banyak'];
        
        $koneksi->query("UPDATE user SET nama = '$nama', alamat = '$alamat', no_telp = '$telp', email = '$email'
            , tipe_brg = '$tipe', warna = '$warna', memory = $memory, jumlah = '$jml' WHERE id='$id'") or
                    die($koneksi->error);
    }
    header("location:index.php?pesan=ID berhasil di rubah")
?>