<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labit.mysql.database.azure.com', 'aphatsara836@labit', 'Po0926245419', 'ITFLab', 3306);
if (!$conn)
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$ID = $_POST['ID'];
$product = $_POST['product'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$sql = "UPDATE guestbook SET Product='$product', Price='$price', Discount='$discount' WHERE ID='$ID'";

if (mysqli_query($conn, $sql)) {
    echo '<div class="container">
            <h3>Edited successfully.</h3>
            <a role="button" class="btn btn-primary mt-3" href="index.php">Home</a>
         </div>';
    echo $product;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
