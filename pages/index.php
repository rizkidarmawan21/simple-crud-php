<?php
session_start();
// create check session username
if (!isset($_SESSION['username'])) {
    // echo "Session kosong";
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }

        .flex-container {
            display: flex;
            flex-direction: row;
            font-size: 20px;
            text-align: center;
        }

        .flex-item-left {
            padding: 10px;
            flex: 50%;
        }

        .flex-item-right {
            background-color: dodgerblue;
            padding: 10px;
            flex: 50%;
        }

        /* Responsive layout - makes a one column-layout instead of two-column layout */
        @media (max-width: 800px) {
            .flex-container {
                flex-direction: column;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 100%;
            margin-top: 15px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="../pages/index.php">Produk E-commerce</a></li>
            <li><a href="../pages/create.php">Manage Produk</a></li>
            <li><a href="../pages/user.php">Users</a></li>
            <li><a href="../auth/logout.php?logout">Logout</a></li>
        </ul>
    </nav>

    <h1>List Produk</h1>
    <h3>Selamat Datang <u><?= $_SESSION['username'] ?></u></h3>

    <div class="flex-container">

        <?php
        include '../connect.php';
        $data = mysqli_query($conn, "select * from product");
        while ($row = mysqli_fetch_array($data)) {

        ?>
            <div class="flex-item-left">
                <div class="card">
                    <img src="../assets/<?= $row['image'] ?>" alt="Avatar" style="width:100px">
                    <div class="container">
                        <h4><b><?= $row['title'] ?></b></h4>
                        <p><?= $row['price'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</body>

</html>