<?php
    include "../../koneksi.php";
    $id = 0;
    if (isset($_POST['edit'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tgl_lhr = $_POST['tgl_lhr'];
        $no_telp = $_POST['no_telp'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        $koneksi->query("UPDATE user SET nama = '$nama', alamat = '$alamat', tanggal_lahir = '$tgl_lhr', 
            no_telp = '$no_telp', email = '$email', username = '$username', password ='$password' WHERE id='$id'") or
                    die($koneksi->error);
    }
    header("location:index.php?pesan=ID berhasil di rubah")
?>