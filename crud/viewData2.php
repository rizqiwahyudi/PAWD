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
    <title>CRUD View 2</title>
</head>
<body>
    <?php 
        if ($num == 0) {
            echo "0 Result";
        }else{

    ?>
    <a href="insert.php">Create Data</a>
    <table border="1" cellspacing="2" cellpadding="2">
        <tr>
            <th>first</th>
            <th>last</th>
            <th>phone</th>
            <th>mobile</th>
            <th>fax</th>
            <th>email</th>
            <th>web</th>
        </tr>
        <?php 
            while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?= $row['first'] ?></td>
            <td><?= $row['last'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['mobile'] ?></td>
            <td><?= $row['fax'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['web'] ?></td>
        </tr>
        <?php 
            }
        ?>
    </table>
    <?php } ?>
</body>
</html>