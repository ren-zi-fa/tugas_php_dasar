<?php
session_start();
session_destroy();
header("Location: ../data-mahasiswa/index.php");
?>