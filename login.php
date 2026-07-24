<?php
session_start();

$conn = new mysqli("localhost","root","","local2global");

if($conn->connect_error){
    die("Connection Failed");
}

$message="";

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    // Check Customer
    $customer=$conn->query("SELECT * FROM customer WHERE email='$email' AND password='$password'");

    if($customer->num_rows>0)
    {
        $row=$customer->fetch_assoc();

        $_SESSION['role']="customer";
        $_SESSION['email']=$row['email'];

        header("Location:index.php");
        exit();
    }

    // Check Seller
    $seller=$conn->query("SELECT * FROM seller WHERE email='$email' AND password='$password'");

    if($seller->num_rows>0)
    {
        $row=$seller->fetch_assoc();

        $_SESSION['role']="seller";
        $_SESSION['email']=$row['email'];

        header("Location:index.php");
        exit();
    }

    $message="Invalid Email or Password!";
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login | Local2Global</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#F8F6EE;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
font-family:Poppins,sans-serif;
}

.card{
width:420px;
border:none;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.15);
}

.card-header{
background:#6D4C41;
color:white;
font-size:28px;
font-weight:bold;
text-align:center;
padding:20px;
}

.card-body{
padding:30px;
}

.form-control{
height:50px;
margin-bottom:18px;
}

.btn-login{
width:100%;
height:50px;
background:#6D4C41;
color:white;
font-size:18px;
border:none;
}

.btn-login:hover{
background:#4E342E;
}

</style>

</head>

<body>

<div class="card">

<div class="card-header">

Login

</div>

<div class="card-body">

<?php
if($message!="")
{
echo "<div class='alert alert-danger'>$message</div>";
}
?>

<form method="POST">

<input
type="email"
name="email"
class="form-control"
placeholder="Email"
required>

<input
type="password"
name="password"
class="form-control"
placeholder="Password"
required>

<button
name="login"
class="btn btn-login">

Login

</button>

</form>

</div>

</div>

</body>
</html>