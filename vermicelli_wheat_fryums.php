<?php

$conn = new mysqli("localhost","root","","local2global");

if($conn->connect_error)
{
    die("Connection Failed : ".$conn->connect_error);
}

$search = "";

if(isset($_GET['search']))
{
    $search = $_GET['search'];
}


$sql = "SELECT * FROM products
WHERE category='Vermicelli and Wheat Fryums'
AND product_name LIKE '%$search%'";


$result = $conn->query($sql);


if(!$result)
{
    die("Query Error : ".$conn->error);
}

?>


<!DOCTYPE html>
<html>
<head>

<title>Vermicelli & Wheat Fryums | Local2Global</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}


body{
background:#f8f8f8;
}


header{

height:80px;
background:white;
display:flex;
justify-content:space-between;
align-items:center;
padding:0 50px;
box-shadow:0 3px 15px #ddd;

}


.logo h2{
color:#B76E8A;
}


.search form{
display:flex;
gap:10px;
}


.search input{

width:300px;
padding:12px;
border-radius:20px;
border:1px solid #ddd;

}


.search button{

padding:10px 20px;
border:none;
border-radius:20px;
background:#B76E8A;
color:white;
cursor:pointer;

}



.title{

text-align:center;
padding:40px;

}


.title h2{

font-size:35px;
color:#333;

}


.title p{

color:#777;

}



.products{

display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
padding:40px;

}



.card{

background:white;
border-radius:20px;
overflow:hidden;
box-shadow:0 8px 25px rgba(0,0,0,.12);

}



.card img{

width:100%;
height:220px;
object-fit:cover;

}



.details{

padding:20px;

}



.details h3{

font-size:22px;
color:#333;

}



.price{

font-size:22px;
font-weight:bold;
color:#d35400;

}



.quantity{

margin:10px 0;
color:#555;

}



.description{

height:45px;
overflow:hidden;
color:#777;

}



.contact-btn{

margin-top:15px;
width:100%;
padding:12px;
border:none;
border-radius:12px;
background:#B76E8A;
color:white;
font-size:16px;

}



.no-product{

text-align:center;
font-size:25px;
color:#777;
padding:50px;

}



@media(max-width:1000px){

.products{

grid-template-columns:repeat(2,1fr);

}

}



@media(max-width:600px){

.products{

grid-template-columns:1fr;

}

header{

flex-direction:column;
height:auto;
padding:20px;

}

}

</style>


</head>


<body>



<header>


<div class="logo">

<h2>Local2Global</h2>

</div>



<div class="search">


<form method="GET">


<input 
type="text"
name="search"
placeholder="Search Vermicelli & Wheat Fryums..."
value="<?php echo $search; ?>">



<button>

Search

</button>


</form>


</div>


</header>




<section class="title">


<h2>

Vermicelli & Wheat Fryums

</h2>



<p>

Explore Traditional Vermicelli and Wheat Fryums Products

</p>


</section>




<section class="products">



<?php


if($result->num_rows > 0)

{


while($row=$result->fetch_assoc())

{


?>


<div class="card">


<img src="uploads/<?php echo $row['image']; ?>">



<div class="details">


<h3>

<?php echo $row['product_name']; ?>

</h3>



<p class="price">

₹<?php echo $row['price']; ?>

</p>



<p class="quantity">

Quantity : <?php echo $row['quantity']; ?>

</p>



<p class="description">

<?php echo $row['description']; ?>

</p>




<button class="contact-btn">

<i class="fa-solid fa-cart-shopping"></i>

Buy Now

</button>



</div>


</div>



<?php


}


}

else

{


echo "

<div class='no-product'>

No Vermicelli & Wheat Fryums Products Available

</div>

";


}



?>



</section>



</body>


</html>



<?php

$conn->close();

?>