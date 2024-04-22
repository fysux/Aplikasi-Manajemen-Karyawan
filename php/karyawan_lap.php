<?php
require_once "database\db_config.php";

$tabel = "karyawan";
$karyawan = "Lapangan";
$query = "SELECT COUNT(*) as total FROM $tabel WHERE penempatan = '$karyawan'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    echo "Error: " . mysqli_error($koneksi);
    exit();
}

$row = mysqli_fetch_assoc($result);
$total_data_lap = $row['total'];

mysqli_free_result($result);

?>