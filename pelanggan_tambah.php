<?php
    if(isset($_POST['nama_pelanggan'])) {
        $nama = $_POST['nama_pelanggan'];
        $alamat = $_POST['alamat'];
        $NomorTelepon = $_POST['NomorTelepon'];

        $query = mysqli_query($koneksi, "INSERT INTO pelanggan (nama_pelanggan, alamat, NomorTelepon) VALUES ('$nama', '$alamat', '$NomorTelepon')");
        if($query) {
            echo '<script>alert("Tambah Data Berhasil")</script>';
        } else {
            echo '<script>alert("Tambah Data Gagal")</script>';
        }
    }
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pelanggan</li>
    </ol>
    <a href="?page=pelanggan" class="btn btn-danger">Kembali</a>
    <hr>

    <form method="POST">
        <table class="table table-bordered">
            <tr>
                <td width="200">Nama Pelanggan</td>
                <td width="1">:</td>
                <td><input class="form-control" type="text" name="nama_pelanggan"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" rows="5" class="form-control"></textarea></textarea>
                </td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><input class="form-control" type="number" step="0" name="NomorTelepon"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </td>
            </tr>
        </table>
    </form>
  
</div>