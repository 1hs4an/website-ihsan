<?php

require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Lakukan query untuk menghapus data mahasiswa berdasarkan NIM
    $query = "DELETE FROM tbl_mhs WHERE Nim='$nim'";
    if (mysqli_query($koneksi, $query)) {
        echo 'Data mahasiswa berhasil dihapus.';
        echo "<meta http-equiv=refresh content=1;URL='List_mhs.php'>";
    } else {
        echo 'Gagal menghapus data mahasiswa: '.mysqli_error($koneksi);
    }
} else {
    echo 'Akses tidak sah.';
}

mysqli_close($koneksi);
