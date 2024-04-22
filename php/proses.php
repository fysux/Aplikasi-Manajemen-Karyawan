<?php

require_once "database\db_config.php";

$tabel = "karyawan";
$query = "SELECT COUNT(*) as total FROM $tabel";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    echo "Error: " . mysqli_error($koneksi);
    exit();
}

$row = mysqli_fetch_assoc($result);
$total_data = $row['total'];

mysqli_free_result($result);

?>