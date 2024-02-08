<?php
$host = "localhost";
$username = "renzi";
$password = "renzi";
$database = "db_sekolah_21101152630267";
$koneksi = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$nobp = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM tbl_siswa_210267 WHERE nobp = '$nobp'");
$tampil = mysqli_fetch_array($result);

if (isset($_POST['update'])) {
    $nobp = $_POST['nobp'];
    $nama = $_POST['nama'];
    $jenkel = $_POST['jenkel'];
    $jurusan = $_POST['jurusan'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tbl_siswa_210267
              SET nobp = '$nobp',
              nama = '$nama',
              jenkel = '$jenkel',
              jurusan = '$jurusan',
              tanggal_lahir = '$tgl_lahir',
              alamat = '$alamat'
              WHERE nobp = '$nobp'";

    $update = mysqli_query($koneksi, $query);

    if ($update) {
        echo "<script>
            alert('Data berhasil diupdate');
            window.location.href = 'laporan.php';
            </script>";
    } else {
        echo "<script>
        alert('Data gagal diupdate');
        window.location.href = 'laporan.php';
        </script>";
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
            <h2>form Edit data mahasiswa</h2>

            <form action="" method="post">
                <table>
                    <tr  style="visibility: hidden;">
                        <td>NoBp</td>
                        <td><input type="text" name="nobp" value="<?php echo $tampil['nobp']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>jurusan</td>
                        <td><input type="text" name="jurusan" value="<?php echo $tampil['jurusan']; ?>" require></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin :</td>
                        <td>
                            <input type="radio" name="jenkel" value="wanita" id="wanita" <?php if ($tampil['jenkel'] == 'wanita') echo 'Checked'; ?>>
                            <label for="wanita">wanita</label>
                            <input type="radio" name="jenkel" id="pria" value="pria" <?php if ($tampil['jenkel'] == 'pria') echo 'Checked'; ?>>
                            <label for="pria">pria</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="date" name="tgl_lahir" value="<?php echo $tampil['tanggal_lahir']; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" id="" cols="30" rows="10" require><?php echo $tampil['alamat']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="update" class="button-simpan"> Update</button></td>
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