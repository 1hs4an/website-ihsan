<!DOCTYPE html>
<html>
<head>
    <title>FORM BIODATA DIRI</title>
    <?php include 'index.php';?>
</head>

<style>
    body{
        text-align:left;
        background-color:greenyellow;
    }
    form{
        display:inline-block;
        text-align:left;
        background-color:greenyellow;
    }
    td{
        padding:5px;
    }
    </style>
<body>
    <form action="Proses_mhs.php" method="POST">
        <fieldset>
        <legend>BIODATA DIRI</legend>
        <p>
            <label>Nama</label>
            <label>:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
            <label>Nim</label>
            <label>:</label>
            <input type="text" name="Nim" placeholder="Nim..." />
        </p>
        <p>
            <label>tanggal lahir:</label>
            <input type="date" name="tanggal lahir" placeholder="tanggal lahir..." />
        </p>
        <p>
            <label>tempat lahir:</label>
            <input type="text" name="tempat lahir" placeholder="tempat lahir..." />
        </p>
        <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="Laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan</label>
        </p>
        
            </select>
        </p>
        <p>
            <label>Alamat:</label>
            <textarea name="Alamat"></textarea>
        </p>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
    </form>
    </html>
