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
        <title>Daftar ID</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="col-sm-12 text-center">
            <h2>DAFTAR ID</h2>
            <table border=2 class="table text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>No Telpon</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th colspan="2">Action</th>
                </tr>
            <?php
                include "../../koneksi.php";
                $result = $koneksi->query("SELECT * FROM user") or die(mysqli_error($koneksi));
                $nomor = 1;
                while($row = $result->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['tanggal_lahir']; ?></td>
                    <td><?php echo $row['no_telp']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                        <a class="btn btn-outline-dark" href="edit.php?edit=<?php echo $row['id']?>" name="edit" id="edit"<?php echo $row['username']?>>Edit</a>
                        <a class="btn btn-outline-dark" href="delete.php?delete=<?php echo $row['username']?>" name="delete" id="delete">Hapus</a>
                    </td>
                </tr>
               <?php } ?>
            </table>
            <form action="../../login/logout.php" method="post">
                <a href="../index.php" class="btn btn-outline-dark">Kembali</a>
                <input type="submit" value="Logout" class="btn btn-outline-dark"name="logout" id="logout">
            </form>
        </div>
    </body>
</html>