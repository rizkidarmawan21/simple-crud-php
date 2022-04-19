<?php
session_start();

// logout session
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: ../index.php");
}else {
    echo "Logout Gagal";
}