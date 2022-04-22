<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>
    <div class="container col-12 col-md-4 col-lg-4 text-center">
        <br>
        <br>
        <br>
        <?php
        session_start();
        include 'connect.php';

        if($_SESSION){
            header("Location:pages/index.php");
        }

        error_reporting(error_reporting() & ~E_NOTICE);
        if ($_GET['status'] == 'false') {
            echo '<div class="alert alert-danger" role="alert">
            Register Gagal !
          </div>';
        } elseif ($_GET['status'] == 'true') {
            echo '<div class="alert alert-primary" role="alert">
            Register Berhasil !
          </div>';
        }
        ?>
        <br>
        <h1>Halaman Register</h1>
        <br>
        <br>
        <form action="auth/register.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username / Nama</label>
                <input type="text" class="form-control" name="username" id="username" >

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">Telepon</label>
                <input type="number" class="form-control" name="telp" id="telp">
            </div>
            <div class="mb-3">
                <label for="peran" class="form-label">Peran / Roles</label>
                <select class="form-control" name="peran" id="peran">
                    <option value="ADMIN">ADMIN</option>
                    <option value="USER">USER</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="register">Submit</button>
        </form>
        <br>
        <a href="index.php">Sudah Memiliki Akun ?</a>
        <br>
        <br>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>