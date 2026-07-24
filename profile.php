<?php
session_start();

if(!isset($_SESSION['role']))
{
    header("Location:login.php");
    exit();
}

$conn = new mysqli("localhost","root","","local2global");

if($conn->connect_error)
{
    die("Connection Failed");
}

$role = $_SESSION['role'];

if($role=="customer")
{
    $email = $_SESSION['email'];

    $result = $conn->query("SELECT * FROM customer WHERE email='$email'");
    $user = $result->fetch_assoc();
}
else
{
    $email = $_SESSION['email'];

    $result = $conn->query("SELECT * FROM seller WHERE email='$email'");
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>My Profile | Local2Global</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:linear-gradient(135deg,#F8F6EE,#FFFDF9,#F5EEE5);
min-height:100vh;
}

.header{
background:linear-gradient(135deg,#8D6E63,#5D4037);
padding:16px 35px;
display:flex;
justify-content:space-between;
align-items:center;
color:white;
box-shadow:0 5px 15px rgba(0,0,0,.15);
}

.header h1{
font-weight:700;
}

.container{
max-width:900px;
margin:45px auto;
}

.card{
border:none;
border-radius:30px;
overflow:hidden;
box-shadow:0 20px 40px rgba(0,0,0,.12);
}

.card-header{
background:#E9DCC9;
padding:25px;
text-align:center;
font-size:32px;
font-weight:bold;
color:#5D4037;
}

.profile-top{
padding:35px;
text-align:center;
background:white;
}

.avatar{
width:150px;
height:150px;
margin:0 auto;
border-radius:50%;
display:flex;
justify-content:center;
align-items:center;
font-size:60px;
font-weight:bold;
color:white;
background:linear-gradient(135deg,#8D6E63,#5D4037);
border:6px solid #E9DCC9;
box-shadow:0 15px 35px rgba(0,0,0,.18);
transition:.4s;
cursor:pointer;
}

.avatar:hover{
transform:scale(1.08) rotate(8deg);
box-shadow:0 20px 45px rgba(0,0,0,.25);
}

.name{
margin-top:20px;
font-size:32px;
font-weight:bold;
color:#5D4037;
}

.badge{
display:inline-block;
margin-top:12px;
padding:10px 22px;
background:#198754;
color:white;
border-radius:30px;
font-size:15px;
font-weight:600;
}

.info-area{
padding:35px;
background:#fff;
display:grid;
grid-template-columns:repeat(2,1fr);
gap:20px;
}

@media(max-width:768px){
.info-area{
grid-template-columns:1fr;
}
}


.info-box{
background:white;
padding:20px;
border-radius:18px;
border:1px solid #ececec;
box-shadow:0 8px 18px rgba(0,0,0,.08);
transition:.35s;
}

.info-box:hover{
transform:translateY(-8px);
box-shadow:0 18px 30px rgba(0,0,0,.15);
}

.label{
font-size:13px;
color:#777;
font-weight:600;
margin-bottom:8px;
}

.value{
font-size:19px;
font-weight:600;
color:#333;
word-break:break-word;
}


.buttons{
display:flex;
justify-content:center;
gap:20px;
flex-wrap:wrap;
padding:35px;
background:#fafafa;
border-top:1px solid #eee;
}

.btn-custom{
padding:15px 34px;
font-size:17px;
font-weight:600;
border-radius:50px;
text-decoration:none;
color:white;
transition:.35s;
box-shadow:0 8px 18px rgba(0,0,0,.12);
}

.home{
background:#198754;
}

.dashboard{
background:#0d6efd;
}

.logout{
background:#dc3545;
}

.btn-custom:hover{
transform:translateY(-4px);
color:white;
}


.section-title{
grid-column:1/-1;
text-align:center;
font-size:28px;
font-weight:700;
color:#5D4037;
margin-bottom:10px;
}




footer{
margin-top:30px;
padding:20px;
text-align:center;
font-size:15px;
color:#666;
}

</style>

</head>

<body>

<div class="header">

<h5>
👤 Welcome,
<?php

if($role=="customer")
echo $user['full_name'];

else
echo $user['seller_name'];

?>
</h5>

<p>🌾Local2Global</p>

</div>

<div class="container">

<div class="card">

<div class="card-header">

<?php echo ucfirst($role)." Profile"; ?>

</div>

<div class="profile-top">

<div class="avatar">

<?php

if($role=="customer")
{
    echo strtoupper(substr($user['full_name'],0,1));
}
else
{
    echo strtoupper(substr($user['seller_name'],0,1));
}

?>

</div>



<div class="badge">

✔ Verified <?php echo ucfirst($role); ?>

</div>

</div>

<div class="info-area">
    <h3 class="section-title">
📋 Personal Information
</h3>
    <?php

if($role=="customer")
{

?>



<div class="info-box">
<div class="label">👤 Full Name</div>
<div class="value"><?php echo $user['full_name']; ?></div>
</div>

<div class="info-box">
<div class="label">🆔 Username</div>
<div class="value"><?php echo $user['username']; ?></div>
</div>

<div class="info-box">
<div class="label">📧 Email Address</div>
<div class="value"><?php echo $user['email']; ?></div>
</div>

<div class="info-box">
<div class="label">📱 Phone Number</div>
<div class="value"><?php echo $user['phone']; ?></div>
</div>

<div class="info-box">
<div class="label">🚻 Gender</div>
<div class="value"><?php echo $user['gender']; ?></div>
</div>

<div class="info-box">
<div class="label">📍 Address</div>
<div class="value"><?php echo $user['address']; ?></div>
</div>

<div class="info-box">
<div class="label">🏙 City</div>
<div class="value"><?php echo $user['city']; ?></div>
</div>

<div class="info-box">
<div class="label">🌎 State</div>
<div class="value"><?php echo $user['state']; ?></div>
</div>

<div class="info-box">
<div class="label">📮 Pincode</div>
<div class="value"><?php echo $user['pincode']; ?></div>
</div>

<?php

}
else
{

?>

<div class="info-box">
<div class="label">👤 Seller Name</div>
<div class="value"><?php echo $user['seller_name']; ?></div>
</div>

<div class="info-box">
<div class="label">🏪 Business Name</div>
<div class="value"><?php echo $user['business_name']; ?></div>
</div>

<div class="info-box">
<div class="label">📧 Email Address</div>
<div class="value"><?php echo $user['email']; ?></div>
</div>

<div class="info-box">
<div class="label">📱 Phone Number</div>
<div class="value"><?php echo $user['phone']; ?></div>
</div>

<div class="info-box">
<div class="label">📦 Main Product</div>
<div class="value"><?php echo $user['product_name']; ?></div>
</div>

<div class="info-box">
<div class="label">🚚 Shipping Area</div>
<div class="value"><?php echo $user['shipping_area']; ?></div>
</div>

<div class="info-box">
<div class="label">📍 Business Address</div>
<div class="value"><?php echo $user['address']; ?></div>
</div>

<?php

}

?>

</div>

<div class="buttons">

<a href="index.php" class="btn-custom home">
🏠 Back to Home
</a>

<?php

if($role=="seller")
{

?>

<a href="seller_dashboard.php" class="btn-custom dashboard">
📦 Seller Dashboard
</a>

<?php

}

?>

<a href="logout.php" class="btn-custom logout">
🚪 Logout
</a>

</div>

</div>

</div>

<footer>

© 2026 Local2Global • Empowering Rural Entrepreneurs 🌾

</footer>

</body>

</html>