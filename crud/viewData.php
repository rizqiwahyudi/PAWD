<?php
include 'koneksi.php';

$query = "SELECT * FROM contacts";

$result = mysqli_query($koneksi, $query);

$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD View</title>
</head>
<body>
    <?php
        
        if ($num > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo "id: " . $row["id"]. " - First: " . $row["first"]. " " . $row["last"]. "-"."phone: ".$row["phone"]."-"."mobile: ".$row["mobile"]."-"."fax: ".$row["fax"]."-"."email: ".$row["email"]."-"."web: ".$row["web"]."<br>";
            }
        }else{
            echo "0 Result";
        }

    ?>
</body>
</html>