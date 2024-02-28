<?php
session_start();
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $namaalbum = $_POST['namaalbum'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = date('Y-m-d');
    $userid = $_SESSION['userid'];

    $sql = mysqli_query($conn, "insert into album values('','$namaalbum','$deskripsi','$tanggal','$userid')");

    echo "<script>
        alert('Data berhasil disimpan!');
        location.href='../admin/album.php';
    </script>";
}

if (isset($_POST['edit'])) {
    $albumid = $_POST['albumid'];
    $namaalbum = $_POST['namaalbum'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = date('Y-m-d');
    $userid = $_SESSION['userid'];

    $sql = mysqli_query($conn, "update album set namaalbum='$namaalbum', deskripsi='$deskripsi', tanggaldibuat='$tanggal' where albumid='$albumid'");

    echo "<script>
        alert('Data berhasil diperbarui!');
        location.href='../admin/album.php';
    </script>";
}

if (isset($_POST['hapus'])) {
    $albumid = $_POST['albumid'];

    $sql = mysqli_query($conn, "delete from album where albumid='$albumid'");

    echo "<script>
        alert('Data berhasil dihapus!');
        location.href='../admin/album.php';
    </script>";
}