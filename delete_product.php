<?php
$conn = new mysqli("localhost","root","","local2global");

if($conn->connect_error){
    die("Connection Failed");
}

if(isset($_GET['product_name']))
{
    $product_name = $_GET['product_name'];

    $sql = "DELETE FROM products WHERE product_name='$product_name'";

    if($conn->query($sql))
    {
        header("Location: products.php");
        exit();
    }
    else
    {
        echo "Error: ".$conn->error;
    }
}
else
{
    echo "Product not found.";
}

$conn->close();
?>