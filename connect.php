<?php

// create connection database mysql and check error
$conn = mysqli_connect("localhost", "root", "", "login-ecommerce");
// $conn = mysqli_connect("localhost", "root", "", "login-ecommerce");

//  check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}