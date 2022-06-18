<?php

$username = "sertikom-crud";
$database = "sertikom-crud";
$password = "crud";

$koneksi = mysqli_connect('localhost', $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>