<?php

include '../connect.php';


if(isset($_POST['update'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $peran = $_POST['peran'];
    $password = $_POST['password'];

    // var_dump($_POST);
    // die();
    // $query = "UPDATE user SET  username = '$username', password = '$password','email'='$email', 'telp' ='$telp', 'peran'='$peran' WHERE id = $id";
    $query = "UPDATE `user` SET `username`='$username',`password`='$password',`email`='$email',`telp`='$telp',`peran`='$peran' WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../pages/user.php");
    } else {
        echo "Gagal $conn->error";
    }
   
}elseif(isset($_POST['addUser'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $peran = $_POST['peran'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (username, password,email,telp,peran) VALUES ('$username', '$password','$email','$telp','$peran')";
    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: ../pages/user.php");
    }else{
        echo "Register Gagal";
        header("Location: ../pages/user.php");
    }
}elseif($_GET['status'] == 'delete'){
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
    
}else

?>