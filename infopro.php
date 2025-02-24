<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Data Produk</h1>
    <table>
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stock</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM produk");
        while($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['nama_produk']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            <td><?php echo $data['stock']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <a href="?page=home" class="btn btn-danger">Kembali</a>
</body>
</html>
