<?php
$query = include '../connect.php';

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: ../index.php?status=true");
    }else{
        echo "Register Gagal";
        header("Location: ../register.php?status=false");
    }

}