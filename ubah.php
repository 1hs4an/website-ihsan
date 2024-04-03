<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['Nama'];
    $nim = $_POST['Nim'];
    $jenis_kelamin = isset($_POST['Jenis_kelamin']) ? $_POST['Jenis_kelamin'] : '';
    $tempat_lahir = $_POST['Tempat_lahir'];
    $tanggal_lahir = $_POST['Tanggal_lahir']; 
    $alamat = $_POST['Alamat'];

    // Perhatikan bahwa perintah SQL yang benar adalah UPDATE, bukan INSERT INTO.
    $sql = "UPDATE tbl_mhs
            SET Nama='$Nama', Tanggal_lahir='$Tanggallahir', Tempat_lahir='$TempatLahir',Jenis_kelamin='$JenisKelamin', Alamat='$Alamat' 
            WHERE Nim='$nim'";

    if (mysqli_query($koneksi, $sql)) {
        // Redirect ke halaman list_mhs.php setelah data berhasil diupdate.
        header('Location: list_mhs.php');
        exit();
    } else {
        echo 'Error: '.$sql.'<br>'.mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
?>