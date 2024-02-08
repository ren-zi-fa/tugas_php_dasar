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

$query = "DELETE FROM tbl_siswa_210267 WHERE nobp = '$nobp'";

$hapus = mysqli_query($koneksi,$query);

if ($hapus) {
    echo "<script>
        alert('Data berhasil dihapus');
        window.location.href = 'laporan.php';
        </script>";
} else {
    echo "<script>
    alert('Data gagal dihapus');
    window.location.href = 'laporan.php';
    </script>";
}
