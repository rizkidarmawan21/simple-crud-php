<?php
session_start();
$query = include '../connect.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT `username`,`peran` FROM user WHERE email= '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    $username = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        header("Location: ../pages/index.php");
    }else{
        echo "Username atau Password salah";
        header("Location: ../index.php?status=false");
    }
}