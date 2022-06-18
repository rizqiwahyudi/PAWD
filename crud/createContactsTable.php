<?php
include 'koneksi.php';

$query = "CREATE TABLE contacts (
    id int(6) NOT NULL auto_increment,
    first VARCHAR(15) NOT NULL,
    last VARCHAR(15) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    fax VARCHAR(20) NOT NULL,
    email VARCHAR(30) NOT NULL,
    web VARCHAR(30) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (id)
)";

mysqli_query($koneksi, $query);
mysqli_close($koneksi);
?>