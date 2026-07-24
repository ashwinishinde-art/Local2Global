<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Seller Dashboard | Local2Global</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{
background:#F8F5EC;
}

.sidebar{
position:fixed;
left:0;
top:0;
width:250px;
height:100%;
background:#5D4037;
padding-top:30px;
}

.sidebar h2{
color:white;
text-align:center;
margin-bottom:40px;
font-weight:bold;
}

.sidebar a{
display:block;
color:white;
text-decoration:none;
padding:15px 30px;
font-size:17px;
transition:.3s;
}

.sidebar a:hover{
background:#8D6E63;
}

.main{
margin-left:250px;
padding:30px;
}

.welcome{
background:linear-gradient(135deg,#FFF8E1,#E8F5E9);
padding:25px;
border-radius:20px;
margin-bottom:30px;
}

.welcome h2{
color:#2E7D32;
font-weight:bold;
}

.card-box{
background:white;
border-radius:20px;
padding:25px;
text-align:center;
box-shadow:0 8px 20px rgba(0,0,0,.08);
transition:.3s;
}

.card-box:hover{
transform:translateY(-5px);
}

.card-box h3{
font-size:35px;
color:#6D4C41;
}

.card-box p{
font-size:18px;
}

.action-btn{
width:100%;
height:55px;
border:none;
border-radius:15px;
font-size:18px;
font-weight:bold;
background:#6D4C41;
color:white;
margin-top:20px;
}

.action-btn:hover{
background:#4E342E;
}

</style>

</head>

<body>

<div class="sidebar">

<h2>🌾 Local2Global</h2>

<a href="seller_dashboard.php"><i class="bi bi-house"></i> Dashboard</a>

<a href="products.php"><i class="bi bi-plus-circle"></i> Add Product</a>

<a href="products.php#myproducts">
    <i class="bi bi-box"></i> My Products
</a>

<a href="orders.php"><i class="bi bi-cart"></i> Orders</a>

<a href="profile.php"><i class="bi bi-person"></i> My Profile</a>

<a href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>

</div>

<div class="main">

<div class="welcome">

<h2>🙏 Welcome Seller!</h2>

<p>
Showcase your village products to customers across India.
Manage your products, orders and grow your business.
</p>

</div>

<div class="row g-4">

<div class="col-md-3">

<div class="card-box">

<h3>0</h3>

<p>Products</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box">

<h3>0</h3>

<p>Orders</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box">

<h3>₹0</h3>

<p>Earnings</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box">

<h3>0⭐</h3>

<p>Reviews</p>

</div>

</div>

</div>

<div class="row mt-4">

<div class="col-md-6">

<a href="http://localhost/local2global/products.php"
class="action-btn d-flex justify-content-center align-items-center text-decoration-none">
➕ Add New Product
</a>

</div>

<div class="col-md-6">

<a href="http://localhost/local2global/products.php#myproducts"
class="action-btn d-flex justify-content-center align-items-center text-decoration-none">
📦 View My Products
</a>
</div>

</div>

</div>

</body>
</html>