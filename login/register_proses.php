<?php
session_start();
include '../koneksi.php';
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lhr = $_POST['tanggal_lahir'];
    $no_telp = $_POST['telp'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $result = mysqli_query($koneksi,"SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        header("location:register.php?=username telah digunakan");
        return false; 
    }
    $koneksi -> query("INSERT INTO user (nama,alamat,tanggal_lahir,no_telp,email,username,password) 
        VALUES ('$nama','$alamat','$tgl_lhr','$no_telp','$email','$username','$password')") or
            die($koneksi->error);
    header("location:login.php?=id berhasil di buat");
    return mysqli_affected_rows($koneksi);
?>