<?php

include("konek.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $jumlah = $_POST['jumlah'];
    $description = $_POST['description'];

    // buat query update
    $sql = "UPDATE products SET name='$name', price='$price', jumlah='$jumlah', description='$description' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list
        //echo $id;
        header('Location: tampil.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>