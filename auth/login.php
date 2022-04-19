<?php
session_start();
$query = include '../connect.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        header("Location: ../pages/index.php");
    }else{
        echo "Username atau Password salah";
        header("Location: ../index.php?status=false");
    }
}