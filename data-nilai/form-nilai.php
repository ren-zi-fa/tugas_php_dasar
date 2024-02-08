<?php

$host = "localhost";
$username = "renzi";
$password = "renzi";
$database = "db_sekolah_21101152630267";
$koneksi = mysqli_connect($host, $username, $password, $database);

if(isset($_POST["search"])){
    $nobp = $_POST["nobp"];
    $ambilData = mysqli_query($koneksi,"SELECT * FROM tbl_siswa_210267 where nobp = $nobp");
    $tampil = mysqli_fetch_array($ambilData);

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
                            <a href="../data-mahasiswa/index.php">Insert Nilai Mahasiswa</a>
                        </div>
                    </div>
                </li>
                <li>
                <div class="dropdown">
                        <span class="menu">Laporan</span>
                        <div class="dropdown-content">
                            <a href="../data-mahasiswa/laporan.php">Laporan Data Mahasiswa</a> <br>
                            <a href="../data-nilai/laporan-nilai.php">Laporan Nilai Mahasiswa</a>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
        <div class="gambar"></div>
        <div class="content">
            <h2>form entry nilai mahasiswa</h2>

            <form action="" method="POST">
                <table>
                    <tr>
                        <td>NoBp</td>
                        <td><input type="text" name="nobp" value="<?php echo isset($tampil["nobp"]) ? $tampil["nobp"] : ''; ?>"></td>
                        <td><button type="submit" name="search" class="button-search">seacrh</button></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo isset($tampil["nama"]) ? $tampil["nama"] : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td><input type="text" name="jurusan" value="<?php echo isset($tampil["jurusan"]) ? $tampil["jurusan"] : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nilai UTS</td>
                        <td><input type="text" name="nuts" ></td>
                    </tr>
                    <tr>
                        <td>Nilai UAS</td>
                        <td><input type="text" name="nuas" require></td>
                    </tr>
                    
                    <tr>
                        <td>Nilai Akhir</td>
                        <td><input type="text" name="n_akhir" require></td>
                    </tr>                     
                    <tr>
                        <td></td>
                        <td><button type="submit" name="simpan" class="button-simpan"> simpan</button></td>
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

<?php

if(isset($_POST["simpan"])){
    $nobp = $_POST["nobp"];
    $nuas = $_POST["nuas"];
    $nuts = $_POST["nuts"];
 
    $n_akhir =  ($nuas + $nuts)/2;
    if($n_akhir >=80){
            $n_huruf = "A";
    }else if ($n_akhir >=65){
        $n_huruf = "B";
    }else if ($n_akhir >=55){
        $n_huruf="C";
    }else if ($n_akhir >=45){
        $n_huruf="D";
    }else {
        $n_huruf = "E";
    }
    $query = "INSERT INTO tbl_nilai ( nobp, nuts, nuas, n_akhir, n_huruf) VALUES ('$nobp','$nuts','$nuas','$n_akhir','$n_huruf')";
    $simpan = mysqli_query($koneksi, $query);
    var_dump($simpan);
    if ($simpan) {
        echo "<script>alert('data berhasil disimpan');</script>";
    } else {
        echo "<script>alert('data gagal disimpan');</script>";
    }
}

?>