<?php
require_once "..\database\db_config.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    $query = "UPDATE admin SET nama = '$nama', email = '$email', `update` = CURRENT_TIMESTAMP WHERE id = '$id'";

    $result = mysqli_query($koneksi, $query);
    if ($result) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>window.location.href = '../index.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
    }
}
?>
