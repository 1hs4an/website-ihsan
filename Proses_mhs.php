<?php

// Panggil fungsi koneksi
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tangkap data yang dikirimkan dari form
    $nama = $_POST['nama'];
    $nim = $_POST['Nim'];
    $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir']; 
    $alamat = $_POST['Alamat'];

    // Query untuk menambahkan data ke database
    $sql = "INSERT INTO tbl_mhs(nama, Nim, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
            VALUES ('$nama', '$nim', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat')";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: list_mhs.php');
        exit();
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
}
?>
