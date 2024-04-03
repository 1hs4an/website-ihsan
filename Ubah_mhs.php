<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
    <link rel="stylesheet" href="coba.css">
    <?php include 'index.php'; ?>
</head>
<body>
    <div class="isi">
        <form action="ubah.php" method="POST" class="form">
            <h1>Form Data Mahasiswa</h1>
<?php
    include 'koneksi.php';
    if (isset($_GET['Nim'])) {
        $nim = $_GET['Nim'];
        $sql = "SELECT * FROM tbl_mhs WHERE Nim='$nim'";
        $result = mysqli_query($koneksi, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
?>
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text"  name="Nama" value="<?php echo $row['Nama']; ?>">
            </div>
            <div class="form-group">
                <label for="Nim">NIM</label>
                <input type="number" id="Nim" name="Nim" value="<?php echo $row['Nim']; ?>">
            </div>
            <label>Jenis Kelamin</label>
                <div class="radio-group">
                    <input type="radio" name="Jenis_Kelamin" value="Laki-Laki" <?php if($row['Jenis_kelamin']=="Laki-Laki") echo "checked"; ?>><label for="laki">Laki-Laki</label>
                    <input type="radio" name="Jenis_Kelamin" value="Perempuan" <?php if($row['Jenis_kelamin']=="Perempuan") echo "checked"; ?>><label for="perempuan">Perempuan</label>
                </div>
            <div class="form-group">
                <label for="Tempat lahir">Tempat Lahir</label>
                <input type="text" name="Tempat_lahir" value="<?php echo $row['Tempat_lahir']; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Lahir</label>
                <input type="date" id="Tanggal_lahir" name="Tanggal_lahir" value="<?php echo $row['Tanggal lahir']; ?>">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <textarea id="Alamat" name="Alamat"><?php echo $row['Alamat']; ?></textarea>
            </div>
<?php
        } else {
            echo 'Data mahasiswa tidak ditemukan.';
        }
    } else {
        // Tampilkan formulir kosong untuk menambahkan data baru.
    }
?>
            <div class="btn">
                <input type="reset" value="Hapus">
                <input type="submit" value="Ubah">
            </div>
        </form>
    </div>
</body>
</html>