<?php
  session_start();

  //cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
  if($_SESSION['username']!="admin"){
  //melakukan pengalihan
  header("location:../login.php");
  }
?>
<html>
    <head>
        <title>Feedback</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="col-sm-12 text-center">
        <h1>ADMIN MODE</h1>
        <form action="../login/logout.php" method="post">
            <a href="feedback/" class="btn btn-outline-dark">Feedback</a>
            <a href="id/" class="btn btn-outline-dark">Daftar ID</a>
            <a href="pembelian/" class="btn btn-outline-dark">Pembelian</a>
            <input type="submit" value="Logout" class="btn btn-outline-dark" name="logout" id="logout">
        </form>
        </div>
    </body>
</html>