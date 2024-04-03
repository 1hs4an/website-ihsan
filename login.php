<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Lakukan query untuk mendapatkan password yang sesuai dengan email dari database
    $query = "SELECT * FROM tb_profil WHERE email = '$email'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verifikasi password menggunakan password_verify()
        if (password_verify($password, $row['password'])) {
            // Jika password cocok, redirect ke halaman list_mhs.php
            header("Location: list_mhs.php");
            exit(); // Pastikan tidak ada output lain sebelum melakukan redirect
        } else {
            // Jika password tidak cocok, tampilkan pesan error
            header("Location: form_login.php");
            exit();
        }
    } else {
        // Jika email tidak ditemukan, tampilkan pesan error
        echo "Email tidak ditemukan!";
    }
}

// Tutup koneksi ke database di sini
?>