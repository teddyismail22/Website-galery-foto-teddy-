<?php
session_start();
session_destroy();
echo "<script>
        alert('Logout berhasil');
        location.href='../index.php'
    </script>";

?>