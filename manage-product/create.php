<?php

$query = include '../connect.php';

// create product to sql
if (isset($_POST['tambah'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    // var_dump($_POST);
    // var_dump($_FILES['image']['name']);
    // die;


    $path = "../assets/" . $image;
    move_uploaded_file($tmp, $path);
    $query = "INSERT INTO product (title, price,image) VALUES ('$title','$price','$image')";
    $result = mysqli_query($conn, $query);

    echo $_FILES['image']['error'];
    if ($result) {
        header("Location: ../pages/create.php");
    } else {
        echo "Gagal";
    }
}
