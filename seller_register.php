<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Seller Registration | Local2Global</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{

background:linear-gradient(135deg,#FFF6F8,#FFE8EF,#FDFDFD);

min-height:100vh;

display:flex;

justify-content:center;

align-items:center;

padding:40px;

}

.circle{

position:fixed;

border-radius:50%;

filter:blur(70px);

opacity:.5;

}

.c1{

width:280px;

height:280px;

background:#ff8fab;

top:-80px;

left:-80px;

}

.c2{

width:320px;

height:320px;

background:#7dd3fc;

bottom:-100px;

right:-100px;

}

.container-box{

width:1100px;

background:rgba(255,255,255,.72);

backdrop-filter:blur(18px);

border-radius:30px;

display:flex;

overflow:hidden;

box-shadow:0 20px 50px rgba(0,0,0,.15);

z-index:2;

}

.left{

width:40%;

background:linear-gradient(135deg,#FFF7F9,#FFE5ED);

display:flex;

justify-content:center;

align-items:center;

flex-direction:column;

padding:40px;

text-align:center;

}

.left img{

width:130px;

margin-bottom:25px;

background:white;

padding:15px;

border-radius:20px;

}

.left h2{

font-size:38px;

font-weight:bold;

color:#B76E8A;

margin-bottom:15px;

}

.left p{

font-size:18px;

color:#666;

line-height:30px;

}

.right{

width:60%;

padding:45px;

}

.right h2{

font-weight:bold;

margin-bottom:8px;

}

.right p{

color:#777;

margin-bottom:25px;

}

.form-control,

.form-select{

height:52px;

border-radius:12px;

}

textarea.form-control{

height:90px;

resize:none;

}

.btn-register{

width:100%;

height:55px;

border:none;

border-radius:15px;

background:linear-gradient(135deg,#D88BA5,#B76E8A);

color:white;

font-size:18px;

font-weight:600;

transition:.3s;

}

.btn-register:hover{

transform:translateY(-2px);

box-shadow:0 10px 20px rgba(183,110,138,.4);

}

@media(max-width:900px){

.container-box{

flex-direction:column;

}

.left,

.right{

width:100%;

}

}

</style>

</head>

<body>

<div class="circle c1"></div>

<div class="circle c2"></div>

<div class="container-box">

<div class="left">

<img src="logo.png">

<h2>Local2Global</h2>

<p>

Empowering Local Sellers<br>

To Reach Global Customers 🌍

</p>

</div>

<div class="right">

<h2>Seller Registration</h2>

<p>Create your seller account</p>

<form action="save_seller.php" method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<input type="text"

name="seller_name"

class="form-control"

placeholder="Seller Name"

required>

</div>

<div class="col-md-6 mb-3">

<input type="email"

name="email"

class="form-control"

placeholder="Email Address"

required>

</div>

<div class="col-md-6 mb-3">

<input type="text"

name="phone"

class="form-control"

placeholder="Phone Number"

required>

</div>

<div class="col-md-6 mb-3">

<input type="text"

name="business_name"

class="form-control"

placeholder="Business Name"

required>

</div>

<div class="col-12 mb-3">

<textarea

name="address"

class="form-control"

placeholder="Business Address"

required></textarea>

</div>

<div class="col-md-6 mb-3">

<input type="text"

name="product_name"

class="form-control"

placeholder="Product Name"

required>

</div>

<div class="col-md-6 mb-3">

<input type="text"

name="shipping_area"

class="form-control"

placeholder="Shipping Available In"

required>

</div>

<div class="col-md-6 mb-3">

<input type="password"

name="password"

class="form-control"

placeholder="Password"

required>

</div>

<div class="col-md-6 mb-3">

<input type="password"

name="confirm_password"

class="form-control"

placeholder="Confirm Password"

required>

</div>

</div>

<button class="btn-register">

<i class="bi bi-person-plus-fill"></i>

Register

</button>

</form>

</div>

</div>

</body>
</html>