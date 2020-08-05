<?php

include("konek.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: tampil.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM products WHERE id=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk </title>
</head>

<body>
    <header>
        <h3>Edit Produk</h3>
    </header>

    <form action="update.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $produk['id'] ?>" />

        <p>
            <label for="name">Nama Produk: </label>
            <input type="text" name="name" placeholder="Nama Produk" value="<?php echo $produk['name'] ?>" />
        </p>

        <p>
            <label for="price">Harga Produk: </label>
            <input type="text" name="price" placeholder="Harga Produk" value="<?php echo $produk['price'] ?>" />
        </p>
        <p>
            <label for="jumlah">Jumlah Produk: </label>
            <input type="text" name="jumlah" placeholder="Jumlah Produk" value="<?php echo $produk['jumlah'] ?>" />
        </p>
        <p>
            <label for="description">Keterangan: </label>
            <input type="text" name="description" placeholder="Keterangan" value="<?php echo $produk['description'] ?>" />
        </p>

        
        <p>
            <input type="submit" value="Simpan" name="update" />
        </p>

        </fieldset>


    </form>

    </body>
</html>