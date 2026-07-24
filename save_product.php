<?php

$conn = new mysqli("localhost","root","","local2global");

if($conn->connect_error)
{
    die("Connection Failed : ".$conn->connect_error);
}

// Get form data
$product_name = $_POST['product_name'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];

// Image Upload
$image = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];

$target_folder = "uploads/";

move_uploaded_file($temp_name, $target_folder.$image);

// Insert into database
$sql = "INSERT INTO products
(product_name,category,price,quantity,description,image)
VALUES
('$product_name','$category','$price','$quantity','$description','$image')";

if($conn->query($sql)==TRUE)
{
    header("Location: products.php");
    exit();
}
else
{
    echo "Error : ".$conn->error;
}

$conn->close();

?>