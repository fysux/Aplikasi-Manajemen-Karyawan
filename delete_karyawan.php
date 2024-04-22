<?php
require_once "database\db_config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM karyawan WHERE id = '$id'";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data Berhasil Dihapus')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus')</script>";
    }
}
?>