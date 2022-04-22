<?php

include '../connect.php';

// get data by id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id = $id";
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
    <title>Edit User</title>
</head>
<body>
<h1>Edit User <?= $data['username'] ?> </h1>
    <hr>
    <h4><a href="user.php">Kembali</a></h4>
    <form action="../user/function.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div>
            <span>Username :</span>
            <input type="text" name="username" value="<?= $data['username'] ?>" placeholder="Username">
        </div>
        <div>
            <span>Email :</span>
            <input type="text" name="email" value="<?= $data['email'] ?>" placeholder="email">
        </div>
        <div>
            <span>Telepon :</span>
            <input type="text" name="telp" value="<?= $data['telp'] ?>" placeholder="telp">
        </div>
        <div>
            <span>Peran :</span>
            <select name="peran" id="">
                <option value="ADMIN" <?= $data['peran'] === 'ADMIN' ? 'selected' : '' ?> >ADMIN</option>
                <option value="USER" <?= $data['peran'] === 'USER' ? 'selected' : '' ?>>USER</option>
            </select>
        </div>
        <div class="">
            <span>Password :</span>
            <input type="text" name="password" value="<?= $data['password'] ?>" placeholder="Password">
        </div>
        <br>
        <button type="submit" name="update">Update Data</button>
    </form>
</body>
</html>