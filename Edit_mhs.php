<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'koneksi.php'; ?>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="judul">
                <h1>Data Mahasiswa</h1>
            </div>
            <a href="form_mhs.php">Tambah</a>
        </div>
        <div class="data">
            <div class="card">
                <div class="card_ket">
                    <img src="logo.png" alt="">
                    <div class="card_title">
                        <h1>STMIK SZ NW</h1>
                        <p>Anjani Lombok Timur</p>
                    </div>
                </div>
                <div class="card_isi">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = 'SELECT * FROM tbl_mhs';
                            $result = mysqli_query($koneksi, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>';
                                    echo "<td align='left'>".$row['Nama'].'</td>';
                                    echo "<td align='left'>".$row['Nim'].'</td>';
                                    echo '<td>'.$row['Jenis_kelamin'].'</td>';
                                    echo "<td align='left'>".$row['Tempat_lahir'].'</td>';
                                    echo '<td>'.$row['Tanggal_lahir'].'</td>';
                                    echo "<td align='left'>".$row['Alamat'].'</td>';
                                    echo "<td>
                                            <a href='form_mhs.php?nim=".$row['Nim']."'>Edit</a> | 
                                            <a href='hapus.php?nim=".$row['Nim']."'>Hapus</a>
                                          </td>";
                                    echo '</tr>';
                                    ++$no;
                                }
                            } else {
                                echo "<tr><td colspan='8'>Belum ada data mahasiswa.</td></tr>";
                            }

                            mysqli_close($koneksi);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <p id="kembali">Kembali ke halaman <a href="home.php">Utama</a></p>
</body>
</html>