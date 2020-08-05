<?php include("konek.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tampil</title>
</head>

<body>
    <header>
        <h3>List Produk</h3>
    </header>

    <nav>
        <a href="index.php"> Back </a>
        <br>
        <br>
        <a href="form.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM products";
        $query = mysqli_query($db, $sql);

        while($produk = mysqli_fetch_array($query)){
            echo "<tr>";
            
            echo "<td>".$produk['id']."</td>";
            echo "<td>".$produk['name']."</td>";
            echo "<td>".$produk['price']."</td>";
            echo "<td>".$produk['jumlah']."</td>";
            echo "<td>".$produk['description']."</td>";
            

            echo "<td>";
            echo "<a href='edit.php?id=".$produk['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$produk['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>