<div class="container-fluid">
    <h1 class="mt-4">PRODUK</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">PRODUK</li>
    </ol>
    <a href="?page=produk_tambah" class="btn btn-primary">+ Tambah Data</a>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Aksi</th>
        </tr>

        <?php
            $query = mysqli_query(mysql: $koneksi, query: "SELECT*FROM produk");
            while($data = mysqli_fetch_array(result: $query))  {
        ?>
            <tr>
                <td><?php echo $data['nama_produk']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                <td><?php echo $data['stock']; ?></td>
                <td>
                    <a href="?page=produk_ubah&&id=<?php echo $data['id_produk']; ?>" class="btn btn-secondary">ubah</a>
                    <a href="?page=produk_hapus&&id=<?php echo $data['id_produk']; ?>" class="btn btn-danger">hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>