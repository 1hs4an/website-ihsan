<?php

// Panggil fungsi koneksi
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tangkap data yang dikirimkan dari form
    $nama = $_POST['Nama'];
    $nidn = $_POST['Nidn'];
    $jenis_kelamin = isset($_POST['Jenis_kelamin']) ? $_POST['Jenis_kelamin'] : '';
    $tempat_lahir = $_POST['Tempat_lahir'];
    $tanggal_lahir = $_POST['Tanggal_lahir']; 
    $alamat = $_POST['Alamat'];

    // Query untuk menambahkan data ke database
    $sql = "INSERT INTO tbl_dosen(Nama, Nidn, Jenis_kelamin, Tempat_lahir, Tanggal_lahir, Alamat)
            VALUES ('$nama', '$nidn', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat')";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: List_dosen.php');
        exit();
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
}
?>