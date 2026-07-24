<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Verification Successful</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#F8F5EC,#FFF8E8,#E8F5E9);
}

.card{
width:620px;
background:white;
padding:50px;
border-radius:25px;
box-shadow:0 15px 40px rgba(0,0,0,.15);
text-align:center;
}

.icon{
font-size:80px;
}

h1{
margin-top:20px;
color:#2E7D32;
font-weight:bold;
}

p{
margin-top:20px;
font-size:18px;
color:#555;
line-height:30px;
}

.btn-custom{
margin-top:20px;
width:100%;
height:55px;
border:none;
border-radius:15px;
font-size:18px;
font-weight:bold;
transition:.3s;
}

.dashboard{
background:#8D6E63;
color:white;
}

.dashboard:hover{
background:#6D4C41;
transform:translateY(-3px);
}

.home{
background:#2E7D32;
color:white;
}

.home:hover{
background:#1B5E20;
transform:translateY(-3px);
}

</style>

</head>

<body>

<div class="card">

<div class="icon">🎉</div>

<h1>Verification Done!</h1>

<p>

Our team has successfully received your details.<br>

Your seller account is now ready.

</p>

<a href="seller_dashboard.php">
<button class="btn-custom dashboard">
📦 Go To Seller Dashboard
</button>
</a>

<a href="index.php">
<button class="btn-custom home">
🏠 Go To Home
</button>
</a>

</div>

</body>
</html>