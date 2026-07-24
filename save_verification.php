<?php

// Database Connection
$conn = new mysqli("localhost", "root", "", "local2global");

// Check Connection
if ($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}

// Get Form Data
$account_holder = $_POST['account_holder'];
$bank_name = $_POST['bank_name'];
$branch_name = $_POST['branch_name'];
$account_number = $_POST['account_number'];
$confirm_account_number = $_POST['confirm_account_number'];
$ifsc = $_POST['ifsc'];
$id_proof = $_POST['id_proof'];
$address_proof = $_POST['address_proof'];
$shipping_area = $_POST['shipping_area'];

// Check Account Number
if($account_number != $confirm_account_number)
{
    die("Account Number and Confirm Account Number do not match.");
}

// Insert Data
$sql = "INSERT INTO seller_verification
(account_holder, bank_name, branch_name, account_number, ifsc, id_proof, address_proof, shipping_area)

VALUES

('$account_holder',
'$bank_name',
'$branch_name',
'$account_number',
'$ifsc',
'$id_proof',
'$address_proof',
'$shipping_area')";

if($conn->query($sql) === TRUE)
{
    header("Location: verification_success.html");
    exit();
}
else
{
    echo "Error: " . $conn->error;
}

$conn->close();

?>