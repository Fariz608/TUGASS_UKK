<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pembelian</title>
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
        .btn-kembali {
            padding: 10px 20px;
            background-color: #d9534f;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-kembali:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <h1>Data Pembelian</h1>
    <table>
        <tr>
            <th>ID Penjualan</th>
            <th>Tanggal Pembelian</th>
            <th>Nama Pelanggan</th>
            <th>Total Harga</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT penjualan.id_penjualan, penjualan.tanggal_penjualan, pelanggan.nama_pelanggan, penjualan.total_harga FROM penjualan LEFT JOIN pelanggan ON pelanggan.id_pelanggan = penjualan.id_pelanggan");
        while($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['id_penjualan']; ?></td>
            <td><?php echo $data['tanggal_penjualan']; ?></td>
            <td><?php echo $data['nama_pelanggan']; ?></td>
            <td><?php echo number_format($data['total_harga'], 0, ',', '.'); ?></td>
        </tr>
        <?php } ?>
    </table>

    <a href="?page=home" class="btn btn-danger">Kembali</a>
</body>
</html>
