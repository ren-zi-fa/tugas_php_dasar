<?php
$host = "localhost";
$username = "renzi";
$password = "renzi";
$database = "db_sekolah_21101152630267";
$koneksi = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM tbl_nilai WHERE id = '$id'");
$tampil = mysqli_fetch_array($result);

if (isset($_POST['update'])) {
    $nobp = $_POST["nobp"];
    $nuts = $_POST["nuts"];
    $nuas = $_POST["nuas"];
    $n_akhir= $_POST["n_akhir"];
    $n_huruf= $_POST["n_huruf"];

    $query = "UPDATE tbl_nilai
              SET nobp = '$nobp',
              nuts = '$nuts',
              nuas = '$nuas',
              n_akhir = '$n_akhir',
              n_huruf = '$n_huruf'
              WHERE id= '$id'";

    $update = mysqli_query($koneksi, $query);

    if ($update) {
        echo "<script>
            alert('Data berhasil diupdate');
            window.location.href = 'laporan-nilai.php';
            </script>";
    } else {
        echo "<script>
        alert('Data gagal diupdate');
        window.location.href = 'laporan-nilai.php';
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
                <li><a href="../data-mahasiswa/index.php" class="button"><span class="text-span">Home</span></a></li>
                <li>
                    <div class="dropdown">
                        <span class="menu">Form</span>
                        <div class="dropdown-content">
                            <a href="../data-mahasiswa/form.php" >Insert Data Mahasiswa</a> <br>
                            <a href="form-nilai.php" >Insert Nilai Mahasiswa</a>
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
            <h2>form Edit Nilai mahasiswa</h2>

            <form action="" method="post">
                <table>
                    <tr  style="visibility: hidden;">
                        <td>NoBp</td>
                        <td><input type="text" name="nobp"  value="<?php echo $tampil['nobp'];?>"></td>
                    </tr>
                    <tr>
                        <td>Nilai UTS</td>
                        <td><input type="text" name="nuts"  value="<?php echo $tampil['nuts']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nilai UAS</td>
                        <td><input type="text" name="nuas"  value="<?php echo $tampil['nuas']; ?>" require></td>
                    </tr>
                    <tr>
                        <td>Nilai AKhir</td>
                        <td><input type="text" name="n_akhir"  value="<?php echo $tampil['n_akhir']; ?>" require></td>
                    </tr>
                    <tr>
                        <td>Nilai_huruf</td>
                        <td><input type="text" name="n_huruf"  value="<?php echo $tampil['n_huruf']; ?>" require></td>
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