<?php
$query = include '../connect.php';

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $peran = $_POST['peran'];

    $query = "INSERT INTO user (username, password,email,telp,peran) VALUES ('$username', '$password','$email','$telp','$peran')";
    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: ../index.php?status=true");
    }else{
        echo "Register Gagal";
        header("Location: ../register.php?status=false");
    }

}