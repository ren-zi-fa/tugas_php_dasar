<?php
$host = "localhost";
$username = "renzi";
$password = "renzi";
$database = "db_sekolah_21101152630267";
$koneksi = mysqli_connect($host, $username, $password, $database);


if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}



// cek tombol prosess
if (isset($_POST["proses"])) {
    $nobp = $_POST["nobp"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $jurusan = $_POST["jurusan"];
    $jenkel = $_POST['jenkel'];

    $query = "INSERT INTO tbl_siswa_210267 VALUES ('$nobp','$nama','$jurusan','$jenkel','$alamat','$tgl_lahir')";
    $simpan = mysqli_query($koneksi, $query);
    if ($simpan) {
        echo "<script>alert('data berhasil disimpan');</script>";
    } else {
        echo "<script>alert('data gagal disimpan');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <div class="main">
        <div class="header">
            <h1 class="judul">Selamat Datang di Website Saya</h1>
            <ul>
                <li><a href="index.php" class="button"><span class="text-span">Home</span></a></li>
                <li>
                    <div class="dropdown">
                        <span class="menu">Form</span>
                        <div class="dropdown-content">
                            <a href="form.php">Insert Data Mahasiswa</a> <br>
                            <a href="../data-nilai/form-nilai.php">Insert Nilai Mahasiswa</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <span class="menu">Laporan</span>
                        <div class="dropdown-content">
                            <a href="./laporan.php">Laporan Data Mahasiswa</a> <br>
                            <a href="../data-nilai/laporan-nilai.php">Laporan Nilai Mahasiswa</a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <div class="gambar"></div>
        <div class="content">
            <h2>form entry data mahasiswa</h2>

            <form action="" method="post">
                <table>
                    <tr>
                        <td>NoBp</td>
                        <td><input type="text" name="nobp"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td><input type="text" name="jurusan" require></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin :</td>
                        <td>

                            <input type="radio" name="jenkel" value="wanita" id="wanita">
                            <label for="wanita">Wanita</label>

                            <input type="radio" name="jenkel" id="pria" value="pria">
                            <label for="pria">Pria</label>

                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="date" name="tgl_lahir"> </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" id="" cols="30" rows="10" require></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="proses" class="button-simpan"> simpan</button></td>
                    </tr>
                </table>
            </form>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate reprehenderit cumque laboriosam quisquam alias accusantium. Reiciendis velit vel cupiditate! Cumque tempore consequatur esse magnam praesentium pariatur dolores dolore inventore in fuga laborum, aperiam labore odio blanditiis quam fugit molestiae non aut soluta quisquam. Delectus quo odit amet, quibusdam repellat deleniti!</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate reprehenderit cumque laboriosam quisquam alias accusantium. Reiciendis velit vel cupiditate! Cumque tempore consequatur esse magnam praesentium pariatur dolores dolore inventore in fuga laborum, aperiam labore odio blanditiis quam fugit molestiae non aut soluta quisquam. Delectus quo odit amet, quibusdam repellat deleniti!</p>
        </div>
        <div class="footer">
            <div class="copy">
                <p>Renzi febriandika: &copy;</p>
            </div>
        </div>
    </div>

</body>

</html>