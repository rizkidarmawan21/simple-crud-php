<?php

include '../connect.php';

if($_GET['status'] === 'delete'){

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM user WHERE id = $id";
        $result = mysqli_query($conn, $query);
    
        if ($result) {
            header("Location: ../pages/user.php");
        } else {
            echo "Gagal";
        }
    }
}elseif(isset($_POST['addUser'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: ../pages/user.php");
    }else{
        echo "Register Gagal";
        header("Location: ../pages/user.php");
    }
}elseif(isset($_POST['update'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE user SET username = '$username', password = '$password' WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../pages/user.php");
    } else {
        echo "Gagal";
    }
}

?>