<html>
    <head>
        <title>Register to Replika Apple</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
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
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
            </div>
        </nav>
        <!--End Navbar-->
        <!--Jumbotron-->
        <div class="jumbotron text-center">
              <img src="../img/apple.png" weight="150px" height="150px">
        </div>
        <!--Form-->
        <form action="register_proses.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1>Register Account</h1>
                        <hr>
                    </div>
                </div>
                    <div class="row">
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
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no_telp">Nomer Telpon</label>
                                <input type="text" name="telp" id="telp" class="form-control" placeholder="Masukan No Telpon">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Register" class="btn btn-outline-dark" name="register" id="register">
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