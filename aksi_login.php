<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);
    $_SESSION['username'] = $data['username'];
    $_SESSION['userid'] = $data['userid'];
    $_SESSION['status'] = 'login';
    echo "<script>
        alert('Login berhasil');
        location.href='../admin/index.php'
    </script>";
} else {
    echo "<script>
        alert('Username atau Password salah!');
        location.href='../login.php'
    </script>";
}

?>