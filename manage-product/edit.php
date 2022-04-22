<?php
include '../connect.php';
// create update product
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $jml_stok = $_POST['jml_stok'];
    $imageOld = $_POST['imageOld'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    if($image){
        $path = "../assets/" . $image;
        move_uploaded_file($tmp, $path);
        $query = "UPDATE product SET title = '$title', price = '$price', jml_stok='$jml_stok',image = '$image' WHERE id = $id";
    }else{
        $query = "UPDATE product SET title = '$title', price = '$price', jml_stok='$jml_stok',image = '$imageOld' WHERE id = $id";
    }
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../pages/create.php");
    } else {
        echo "Gagal";
    }
}