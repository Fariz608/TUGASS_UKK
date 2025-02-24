<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
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
    <h1>Data User</h1>
    <table>
        <tr>
            <th>ID User</th>
            <th>Nama User</th>
            <th>Username</th>
            <th>Role</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM user");
        while($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['id_user']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['level']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <a href="?page=home" class="btn btn-danger">Kembali</a>
</body>
</html>
