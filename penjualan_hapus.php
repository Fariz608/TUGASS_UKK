<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to delete the record
    $query = $koneksi->prepare("DELETE FROM penjualan WHERE id_penjualan = ?");
    $query->bind_param("i", $id);
    if ($query->execute()) {
        echo '<script>alert("Data berhasil dihapus"); location.href="index.php?page=pembelian";</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");</script>';
    }

    $query->close();
}
?>
