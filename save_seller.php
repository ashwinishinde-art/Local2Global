<?php
session_start();

$conn = new mysqli("localhost","root","","local2global");

if($conn->connect_error)
{
    die("Connection Failed : ".$conn->connect_error);
}

$seller_name = $_POST['seller_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$business_name = $_POST['business_name'];
$address = $_POST['address'];
$product_name = $_POST['product_name'];
$shipping_area = $_POST['shipping_area'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($password != $confirm_password)
{
    die("Password and Confirm Password do not match!");
}

$sql = "INSERT INTO seller
(seller_name,email,phone,business_name,address,product_name,shipping_area,password)
VALUES
('$seller_name','$email','$phone','$business_name','$address','$product_name','$shipping_area','$password')";

if($conn->query($sql))
{
    // Save seller session
    $_SESSION['role'] = "seller";
    $_SESSION['seller_name'] = $seller_name;
    $_SESSION['seller_email'] = $email;
    $_SESSION['seller_phone'] = $phone;
    $_SESSION['business_name'] = $business_name;
    $_SESSION['product_name'] = $product_name;
    $_SESSION['shipping_area'] = $shipping_area;
    $_SESSION['address'] = $address;

    header("Location: success.php");
    exit();
}
else
{
    echo "Error: " . $conn->error;
}

$conn->close();
?>