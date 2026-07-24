<?php

$conn = new mysqli("localhost","root","","local2global");

if($conn->connect_error)
{
    die("Connection Failed : " . $conn->connect_error);
}

// Get Form Data
$full_name = $_POST['full_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];

// Check Password
if($password != $confirm_password)
{
    die("Password and Confirm Password do not match!");
}

// Check if Email already exists
$check = $conn->query("SELECT * FROM customer WHERE email='$email'");

if($check->num_rows > 0)
{
    die("This email is already registered. Please use another email.");
}

// Insert Data
$sql = "INSERT INTO customer
(full_name, username, email, phone, password, gender, address, city, state, pincode)
VALUES
('$full_name','$username','$email','$phone','$password','$gender','$address','$city','$state','$pincode')";

if($conn->query($sql) === TRUE)
{
    header("Location: registration_success.php");
    exit();
}
else
{
    die("MySQL Error: " . $conn->error);
}

$conn->close();

?>