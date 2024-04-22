<?php
require "db_config.php";

$nama = "admin";
$email = "admin123@gmail.com";
$password = "admin123";

$password_hash = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO admin (nama, email, password) VALUES ('$nama', '$email', '$password_hash')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Data gagal ditambahkan: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);

