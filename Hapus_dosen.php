<?php

require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['Nidn'])) {
    $nidn = $_GET['Nidn'];

    // Lakukan query untuk menghapus data mahasiswa berdasarkan NIM
    $query = "DELETE FROM tbl_dosen WHERE Nidn='$nidn'";
    if (mysqli_query($koneksi, $query)) {
        echo 'Data dosen berhasil dihapus.';
        echo "<meta http-equiv=refresh content=1;URL='List_dosen.php'>";
    } else {
        echo 'Gagal menghapus data dosen: '.mysqli_error($koneksi);
    }
} else {
    echo 'Akses tidak sah.';
}

mysqli_close($koneksi);