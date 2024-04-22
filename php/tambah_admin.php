<?php
require_once "..\database\db_config.php";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admin (nama, email, password) VALUES ('$nama', '$email', '$password_hash')";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>window.location.href = '../index.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
    }
}


?>