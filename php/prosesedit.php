<?php
require_once "..\database\db_config.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $penempatan = $_POST['penempatan'];
    $tgl_masuk = $_POST['tgl_masuk'];

    $query = "UPDATE karyawan SET nama = '$nama', email = '$email', penempatan = '$penempatan', tgl_masuk = '$tgl_masuk', `update` = CURRENT_TIMESTAMP WHERE id = '$id'";

    $result = mysqli_query($koneksi, $query);
    if ($result) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>window.location.href = '../index.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
    }
}
?>