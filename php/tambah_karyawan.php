<?php
require_once "..\database\db_config.php";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $penempatan = $_POST['penempatan'];
    $tgl_masuk = $_POST['tgl_masuk'];

    $sql = "INSERT INTO karyawan (nama, email, no_telp, penempatan, tgl_masuk) VALUES ('$nama', '$email', '$no_telp', '$penempatan', '$tgl_masuk')";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>window.location.href = '../index.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
    }
}

?>