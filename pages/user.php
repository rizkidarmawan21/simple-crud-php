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
    <title>Manage Produk</title>

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

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
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

    <h1>Manage User</h1>
    <hr>
    <h3>Tambah User</h3>
    <form action="../user/function.php" method="POST">
        <div>
            <span>Username :</span>
            <input type="text" name="username" placeholder="username">
        </div>
        <div class="">
            <span>Password :</span>
            <input type="text" name="password" placeholder="password">
        </div>
        <br>
        <button type="submit" name="addUser">Tambah</button>
    </form>

    <hr>

    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php
        include '../connect.php';
        $data = mysqli_query($conn, "select * from user");
        while ($row = mysqli_fetch_array($data)) {
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td><a href='../pages/editUser.php?id=" . $row['id'] . "'>Edit</a> | <a href='../user/function.php?status=delete&id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }

        ?>
        <!-- <tr>
            <td>Peter</td>
            <td>Griffin</td>
            <td>
                <img src="../assets/product-1.jpg" alt="" width="100px">
            </td>
            <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
            </td>
        </tr> -->
    </table>
</body>

</html>