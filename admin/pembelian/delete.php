<?php
    include "../../koneksi.php";
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];

        $koneksi->query("DELETE FROM pembelian WHERE id=$id") or
                die($koneksi->error);
    }
    header("location: index.php")
?>