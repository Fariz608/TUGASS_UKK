<div class="container-fluid px-4">
    <h1 class="mt-4">PELANGGAN</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pelanggan</li>
    </ol>
    <a href="?page=pelanggan_tambah" class="btn btn-primary">+ Tambah Data</a>
    <hr>
    <table class="table table-border">
        <tr>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Aksi</th>
        </tr>

        <?php
            $query = mysqli_query($koneksi, "SELECT*FROM pelanggan");
            while($data = mysqli_fetch_array($query))  {
        ?>
            <tr>
                <td><?php echo $data['nama_pelanggan']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['NomorTelepon']; ?></td>
                <td>
                    <a href="?page=pelanggan_ubah&&id=<?php echo $data['id_pelanggan']; ?>" class="btn btn-secondary">ubah</a>
                    <a href="?page=pelanggan_hapus&&id=<?php echo $data['id_pelanggan']; ?>" class="btn btn-danger">hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>