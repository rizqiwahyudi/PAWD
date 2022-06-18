<?php
include 'koneksi.php';

$query = "CREATE TABLE users (
    id int(6) NOT NULL auto_increment,
    username VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (id)
)";

mysqli_query($koneksi, $query);
mysqli_close($koneksi);
?>