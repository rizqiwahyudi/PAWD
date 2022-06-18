<?php
include 'koneksi.php';

$query = "INSERT INTO contacts VALUES (
    '', 
    'Rizqi', 
    'Wahyudi', 
    '0892348234', 
    '0223482374', 
    '3423', 
    'anu@gmail.com', 
    'yudi-sec.blogspot.com'
)";

mysqli_query($koneksi, $query);
mysqli_close($koneksi);
?>