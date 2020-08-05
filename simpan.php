<?php

include("konek.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    //$product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $jumlah = $_POST['jumlah'];
    $description = $_POST['description'];

    // buat query
    $sql = "INSERT INTO products (name, price, jumlah, description) VALUE ('$name', '$price', '$jumlah', '$description')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>