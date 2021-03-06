<?php
  $data = file_get_contents('json/iphone.json');
  $menu = json_decode($data, true);

  $menu = $menu["menu"];
?>
<html>
    <head>
        <title>Pembelian Iphone</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="p">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-center fixed-top">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </div>
        </nav>
        <!--End Navbar-->
        <!--Jumbotron-->
        <div class="jumbotron text-center">
              <img src="<?php echo $menu[2]["logo"];?>" weight="150px" height="150px">
        </div>
        <!--Form-->
        <form action="login/login.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1>Beli Iphone</h1>
                        <hr>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <img src="<?php echo $menu[3]["gambar"];?>" weight="400px" height="400px" class="center">
                        <h3 class="text-center">Iphone 11 Pro</h3>
                        </div>
                        <div class="col-sm-6">
                        <img src="<?php echo $menu[3]["gambar"];?>" weight="450px" height="450px" class="center">
                        <h3 class="text-center">Iphone 11 Pro Max</h3>
                        </div>
                        <div class="col-sm-12 col-sm-offset-2">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat">
                            </div>
                            <div class="form-group">
                                <label for="no_telp">Nomer Telpon</label>
                                <input type="text" name="telp" id="telp" class="form-control" placeholder="Masukan No Telpon">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
                            </div>
                            <div class="form-group">
                                <label for="tipe_brg">Tipe Barang</label>
                                <select name="tipe" id="tipe" class="form-control">
                                    <option value="default">Masukan Pilihan!</option>
                                    <option value="Iphone 11 Pro">Iphone 11 Pro</option>
                                    <option value="Iphone 11 Pro Max">Iphone 11 Pro Max</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <select name="warna_brg" id="warna_brg" class="form-control">
                                    <option value="default">Masukan Pilihan!</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Midnight Green">Midnight Green</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Space Grey">Space Grey</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="memory">Kapasitas Penyimpanan</label>
                                <select name="memory" id="memory" class="form-control">
                                    <option value="default">Masukan Pilihan!</option>
                                    <option value="64gb">64 GB</option>
                                    <option value="256gb">256 GB</option>
                                    <option value="512gb">512 GB</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="banyak">Jumlah pembelian</label>
                                <input type="text" name="banyak" id="banyak" class="form-control" placeholder="Banyak Pembelian">
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Tetapkan Pemesanan" class="btn btn-outline-primary" name="beli" id="beli">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>    
        <!--End Form-->
        <!--Footer-->
        <footer class="footer" align="center">
            <p>Made with ♡ | Made Anantha Yoga</p>
        </footer>
        <!--JavaScript-->
        <script src="js/script.js"></script>
    </body>
</html>