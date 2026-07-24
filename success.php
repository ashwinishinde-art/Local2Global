<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Registration Successful | Local2Global</title>

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

background:linear-gradient(135deg,#FFF6F8,#FFE7EF,#F7FBFF);

overflow:hidden;

}

.circle{

position:absolute;

border-radius:50%;

filter:blur(60px);

opacity:.5;

}

.c1{

width:250px;

height:250px;

background:#ff8fab;

top:-70px;

left:-70px;

}

.c2{

width:300px;

height:300px;

background:#7dd3fc;

bottom:-80px;

right:-80px;

}

.box{

width:600px;

background:rgba(255,255,255,.75);

backdrop-filter:blur(20px);

padding:45px;

border-radius:25px;

text-align:center;

box-shadow:0 15px 40px rgba(0,0,0,.15);

z-index:2;

}

.tick{

font-size:70px;

}

h1{

color:#198754;

margin-top:15px;

font-weight:bold;

}

p{

font-size:18px;

color:#555;

margin:20px 0;

line-height:30px;

}

.btn-next{

padding:15px 40px;

font-size:18px;

font-weight:600;

border:none;

border-radius:12px;

background:linear-gradient(135deg,#D88BA5,#B76E8A);

color:white;

cursor:pointer;

transition:.3s;

}

.btn-next:hover{

transform:translateY(-3px);

box-shadow:0 10px 20px rgba(183,110,138,.4);

}

</style>

</head>

<body>

<div class="circle c1"></div>
<div class="circle c2"></div>

<div class="box">

<div class="tick">🎉</div>

<h1>Registration Successful</h1>

<p>

Congratulations! Your seller account has been created successfully.

<br><br>

Before you start selling your products,

please complete your seller verification.

</p>

<a href="seller_verification.php">

<button class="btn-next">

Continue →

</button>

</a>

</div>

</body>
</html>