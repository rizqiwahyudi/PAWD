<?php
include 'koneksi.php';

if (isset($_POST['insertSubmit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $phone = $_POST['phone'];
    $mobile = $_POST['mobile'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];
    $web = $_POST['web'];

    $query = "INSERT INTO contacts VALUES ('','$first', '$last', '$phone', '$mobile', '$fax', '$email', '$web')";

    mysqli_query($koneksi, $query);
    mysqli_close($koneksi);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD  Insert Data</title>
</head>
<body>
    <form action="insert.php" method="POST">
        <input type="text" placeholder="Fisrt Name" name="first"><br>
        <input type="text" placeholder="Last Name" name="last"><br>
        <input type="text" placeholder="phone" name="phone"><br>
        <input type="text" placeholder="mobile" name="mobile"><br>
        <input type="text" placeholder="fax" name="fax"><br>
        <input type="text" placeholder="email" name="email"><br>
        <input type="text" placeholder="web" name="web"><br><br>
        
        <button type="submit" name="insertSubmit">Submit</button>
    </form>
</body>
</html>