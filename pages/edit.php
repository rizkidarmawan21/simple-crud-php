<?php

include '../connect.php';

// get data by id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
<h1>Edit Produk <?= $data['title'] ?> </h1>
    <hr>
    <h4><a href="create.php">Kembali</a></h4>
    <form action="../manage-product/edit.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div>
            <span>Nama Barang :</span>
            <input type="text" name="title" value="<?= $data['title'] ?>" placeholder="nama barang">
        </div>
        <div class="">
            <span>Harga Barang :</span>
            <input type="number" name="price" value="<?= $data['price'] ?>" placeholder="harga barang">
        </div>
        <div>
            <span>Pilih Gambar :</span>
            <input type="hidden" name="imageOld" value="<?= $data['image'] ?>">
            <input type="file" name="image">
        </div>
        <br>
        <button type="submit" name="update">Tambah</button>
    </form>
</body>
</html>