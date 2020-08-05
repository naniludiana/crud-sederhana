<!DOCTYPE html>
<html>
<head>
    <title>Tambah</title>
</head>

<body>
    <header>
        <h3>Tambah Produk</h3>
    </header>

    <form action="simpan.php" method="POST">

        <fieldset>

        <p>
            <label for="name">Nama Produk: </label>
            <input type="text" name="name" placeholder="Nama Produk" />
        </p>
        <p>
            <label for="price">Harga Produk: </label>
            <input type="text" name="price" placeholder="Harga Produk" />
        </p>
        <p>
            <label for="jumlah">Jumlah Produk: </label>
            <input type="text" name="jumlah" placeholder="Jumlah Produk" />
        </p>
        <p>
            <label for="description">Keterangan: </label>
            <input type="text" name="description" placeholder="Keterangan" />
        </p>

        <p>
            <input type="submit" value="Input" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>