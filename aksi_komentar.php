<?php
session_start();
include 'koneksi.php';

$fotoid = $_POST['fotoid'];
$userid = $_SESSION['userid'];
$isikomentar = $_POST['isikomentar'];
$tanggalkomentar = date('Y-m-d');

$query = mysqli_query($conn, "insert into komentarfoto values('','$fotoid','$userid','$isikomentar','$tanggalkomentar')");

echo "<script>
    location.href='../admin/index.php'
</script>";