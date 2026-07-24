<?php
$conn = new mysqli("localhost","root","","local2global");

if($conn->connect_error){
die("Connection Failed");
}

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Seller Products | Local2Global</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{
background:#F8F6EE;
}

.header{

background:linear-gradient(135deg,#8D6E63,#6D4C41);

padding:30px;

color:white;

text-align:center;

}

.header h1{

font-weight:bold;

}

.container{

margin-top:35px;

margin-bottom:40px;

}

.card{

border:none;

border-radius:20px;

box-shadow:0 10px 25px rgba(0,0,0,.12);

margin-bottom:35px;

}

.card-header{

background:#E9DCC9;

font-size:24px;

font-weight:bold;

color:#5D4037;

border-radius:20px 20px 0 0!important;

}

.form-control,
.form-select{

height:52px;

margin-bottom:18px;

border-radius:12px;

}

textarea{

height:110px!important;

resize:none;

}

.btn-save{

width:100%;

height:55px;

background:#6D4C41;

border:none;

color:white;

font-size:18px;

font-weight:bold;

border-radius:12px;

}

.btn-save:hover{

background:#4E342E;

}

table img{

width:70px;

height:70px;

object-fit:cover;

border-radius:10px;

}

th{

background:#8D6E63;

color:white;

}

</style>

</head>

<body>

<div class="header">

<h1>🌾 Local2Global Seller Centre</h1>

<p>Add and manage your village products</p>

</div>

<div class="container">

<div class="card">

<div class="card-header">

➕ Add New Product

</div>

<div class="card-body">

<form action="save_product.php" method="POST" enctype="multipart/form-data">

<input
type="text"
name="product_name"
class="form-control"
placeholder="Product Name"
required>

<select
name="category"
class="form-select"
required>

<option value="">Select Category</option>

<option>BambooCraft</option>
<option>Wool Products</option>
<option>Papad Varieties</option>
<option>Honey</option>
<option>pickle</option>
<option>pulses</option>
<option>Vermicelli and wheat fryums</option>
<option>Soils</option>
<option>Pottery</option>
<option>cow dung and Gomutra</option>


</select>

<input
type="number"
name="price"
class="form-control"
placeholder="Price"
required>

<input
type="number"
name="quantity"
class="form-control"
placeholder="Quantity"
required>

<textarea
name="description"
class="form-control"
placeholder="Description"
required></textarea>

<label><b>Product Image</b></label>

<input
type="file"
name="image"
class="form-control"
required>

<br>

<button
type="submit"
class="btn-save">

💾 Save Product

</button>

</form>

</div>

</div>

<div class="card" id="myproducts">

<div class="card-header">
📦 My Products
</div>

<div class="card-body">

<!-- Your My Products table comes here -->

</div>

</div>

</div>

<div class="card-body">

<table class="table table-bordered table-hover">

<tr>

<th>Image</th>

<th>Name</th>

<th>Category</th>

<th>Price</th>

<th>Quantity</th>

<th>Description</th>
<th width="170">Action</th>

</tr>

<?php

if($result->num_rows>0){

while($row=$result->fetch_assoc()){

?>

<tr>

<td>

<img src="uploads/<?php echo $row['image']; ?>">

</td>

<td><?php echo $row['product_name']; ?></td>

<td><?php echo $row['category']; ?></td>

<td>₹<?php echo $row['price']; ?></td>

<td><?php echo $row['quantity']; ?></td>

<td>
    <?php echo $row['description']; ?>
</td>

<td>

<a href="delete_product.php?product_name=<?php echo urlencode($row['product_name']); ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure you want to delete this product?');">
🗑 Delete
</a>

</td>

</tr>

<?php

}

}

else{

echo "<tr><td colspan='6'>No Products Added Yet</td></tr>";

}

?>

</table>

</div>

</div>

</div>

</body>

</html>