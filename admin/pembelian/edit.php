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
        $result = $koneksi->query("SELECT * FROM pembelian WHERE id = '$id'") or die(mysqli_error($koneksi));
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
            <label>Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo $row['nama'];?>">
        </div>
        <div class="col-sm-12 form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" class="form-control" value="<?php echo $row['alamat'];?>">
        </div>
        <div class="col-sm-12 form-group">
            <label>No Telpon</label>
            <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?php echo $row['no_telp'];?>">
        </div>
        <div class="col-sm-12 form-group">
            <label>Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>">
        </div>
        <div class="col-sm-12 form-group">
            <label>Tipe Barang</label>
            <select name="tipe" id="tipe" class="form-control">
                <option value="<?php echo $row['tipe_brg'];?>"><?php echo $row['tipe_brg'];?></option>
                <option value="Iphone 11">Iphone 11</option>
                <option value="Iphone 11 Pro">Iphone 11 Pro</option>
                <option value="Iphone 11 Pro Max">Iphone 11 Pro Max</option>
            </select>
        </div>
        <div class="col-sm-12 form-group">
            <label>Warna</label>
            <select name="warna" id="warna" class="form-control">
                <option value="<?php echo $row['warna'];?>"><?php echo $row['warna'];?></option>
                <option value="Merah">Merah (Iphone 11)</option>
                <option value="Lime">Lime (Iphone 11)</option>
                <option value="Putih">Putih (Iphone 11)</option>
                <option value="Ungu">Ungu (Iphone 11)</option>
                <option value="Hitam">Hitam (Iphone 11)</option>
                <option value="Kuning">Kuning (Iphone 11)</option>
                <option value="Gold">Gold (Iphone 11 Pro/Max)</option>
                <option value="Midnight Green">Midnight Green (Iphone 11 Pro/Max)</option>
                <option value="Silver">Silver (Iphone 11 Pro/Max)</option>
                <option value="Space Grey">Space Grey (Iphone 11 Pro/Max)</option>
            </select>
        </div>
        <div class="col-sm-12 form-group">
            <label>Memory</label>
            <select name="memory" id="memory" class="form-control">
                <option value="<?php echo $row['memory'];?>"><?php echo $row['memory'];?></option>
                <option value="64gb">64 GB (Iphone 11, 11 Pro, 11 Pro Max)</option>
                <option value="128gb">128 GB (Iphone 11)</option>
                <option value="256gb">256 GB (Iphone 11, 11 Pro, 11 Pro Max)</option>
                <option value="512gb">512 GB (Iphone 11 Pro, 11 Pro Max)</option>
            </select>
        </div><div class="col-sm-12 form-group">
            <label>Jumlah</label>
            <input type="text" name="banyak" id="banyak" class="form-control" value="<?php echo $row['jumlah'];?>">
        </div>
        <div class="col-sm-12 text-center">
            <form action="update.php?" method="post">
                <input type="submit" class="btn btn-outline-dark" value="Ubah Data" name="edit" id="edit">
                <a href="index.php" class="btn btn-outline-dark">Kembali</a>
            </form>
        </div>
    </body>
</html>