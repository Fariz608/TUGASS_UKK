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
    <h1>Data Pelanggan</h1>
    <table>
        <tr>
            <th>ID Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM pelanggan");
        while($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['id_pelanggan']; ?></td>
            <td><?php echo $data['nama_pelanggan']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['NomorTelepon']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <a href="?page=home" class="btn btn-danger">Kembali</a>
</body>
</html>
