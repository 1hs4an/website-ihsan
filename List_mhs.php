<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'index.php'; ?>


    <style>
        body {
            
            background-color: greenyellow;
        }
        
        .container{
        margin: 20px 100px;
        font-family: Arial, Helvetica, sans-serif;
        background-color:bisque;
        }

        /* header */
        .header{
            background-color: white;
        color: black;
        height: 150px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 22px;
        border-radius: 18px;
        margin-top: 50px;
        }
        .header a{
        background-color:greenyellow;
        color:black ;
        text-decoration: none;
        padding: 12px 22px;
        border-radius: 6px;
        }
        table{
            border-collapse: collapse;
            width: 100%;
            background-color: white;
        }
        table, th,td{
            border: 1px solid black;
        }

    </style>

</head>
<body>
    <div class="container">
        <div class="header">
            <div class="judul">
                <h1>Data mahasiswa</h1>
                <p>Tugas Pemrograman</p>
            </div>
            <a href="form_mhs.php">Tambah</a>
        </div>

        <!-- semua data -->
        <div class="data">
            <div class="card">
                <!-- card header -->
                <div class="card_ket">
                    <img src="logo.png" alt="">
                    <div class="card_title">
                        <h1>STMIK SZ NW</h1>
                        <p>Anjani Lombok Timur</p>
                    </div>
                </div>
                <!-- card isi -->
                <div class="card_isi">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>jenis kelamin</th>
                                <th>Alamat</th>
                                <th colspan='2'>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            require_once 'koneksi.php';

                            // Query untuk mengambil data dosen
                            $sql = 'SELECT * FROM tbl_mhs';
                            $result = mysqli_query($koneksi, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while ($row= mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>';
                                    echo "<td align='left'>".$row['Nama'].'</td>';
                                    echo "<td align='left'>".$row['Nim'].'</td>';
                                    echo '<td>'.$row["Tanggal_lahir"].'</td>';
                                    echo "<td align='left'>".$row['Tempat_lahir'].'</td>';
                                    echo '<td>'.$row["Jenis_kelamin"].'</td>';
                                    echo "<td align='left'>".$row['Alamat'].'</td>';
                                    echo '</tr>';
                                    // Tombol Edit
                                echo "<td><a href='ubah_mhs.php?nim=".$row['Nim']."' class='btn btn-warning'>Edit</a></td>";
                                // Tombol Hapus
                                echo "<td><a href='hapus_mhs.php?nim=".$row['Nim']."' class='btn btn-danger'>Hapus</a></td>";
                                echo '</tr>';
                                    ++$no;
                                }
                            } else {
                                echo "<tr><td colspan='7'>Belum ada data mahasiswa.</td></tr>";
                            }

                            
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>