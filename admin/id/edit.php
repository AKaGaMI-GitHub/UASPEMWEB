<?php
    session_start();
    //cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
    if($_SESSION['username']!="admin"){
    //melakukan pengalihan
    header("location:../login.php");
    }
?>
<html>
    <?php
        include "../../koneksi.php";
        $id = $_GET['edit'];
        $result = $koneksi->query("SELECT * FROM user WHERE id = '$id'") or die(mysqli_error($koneksi));
        $row = $result->fetch_assoc()
    ?>
    <title>Edit ID</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <body>
        <div class="text-center">
            <h2>Edit ID</h2>
        </div>
        <input type="hidden" name="id" id="id" value="<?php $id;?>">
        <div class="col-sm-12 form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo $row['nama'];?>">
        </div>
        <div class="col-sm-12 form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" class="form-control" value="<?php echo $row['alamat'];?>">
        </div>
        <div class="col-sm-12 form-group">
            <label for="tgl_lhr">Tanggal Lahir</label>
            <input type="date" name="tgl_lhr" id="tgl_lhr" class="form-control" value="<?php echo $row['tanggal_lahir'];?>">
        </div>
        <div class="col-sm-12 form-group">
            <label for="no_telp">Nomer Telfon</label>
            <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?php echo $row['no_telp'];?>">
        </div>
        <div class="col-sm-12 form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>">
        </div>
        <div class="col-sm-12 form-group">
            <label for="username">Username Baru</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo $row['username'];?>">
        </div>
        <div class="col-sm-12 form-group">
            <label for="password">Password Baru</label>
            <input type="password" name="password" id="password" class="form-control" value="<?php echo $row['password'];?>">
        </div>
        <div class="col-sm-12 text-center">
            <form action="update.php?" method="post">
                <input type="submit" class="btn btn-outline-dark" value="Ubah Data" name="edit" id="edit">
                <a href="index.php" class="btn btn-outline-dark">Kembali</a>
            </form>
        </div>
    </body>
</html>