<?php

include '../connect.php';

// create delete product
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // get image name sql
    $sql = "SELECT `image` FROM `product` WHERE id = $id";
    $resultImg = mysqli_query($conn, $sql);
    $rowImg = mysqli_fetch_assoc($resultImg);
    unlink('../assets/'.$rowImg['image']);

    $query = "DELETE FROM product WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../pages/create.php");
    } else {
        echo "Gagal";
    }
}