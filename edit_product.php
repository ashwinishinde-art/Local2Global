<?php
$conn = new mysqli("localhost","root","","local2global");

if($conn->connect_error){
    die("Connection Failed");
}

// Update product
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    $sql = "UPDATE products SET
            product_name='$product_name',
            category='$category',
            price='$price',
            quantity='$quantity',
            description='$description'
            WHERE id='$id'";

    if($conn->query($sql))
    {
        header("Location: products.php");
        exit();
    }
    else
    {
        echo "Error : ".$conn->error;
    }
}

// Get product details
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM products WHERE id='$id'");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Product</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#F8F6EE;
font-family:Poppins,sans-serif;
}

.container{
max-width:700px;
margin-top:50px;
}

.card{
border-radius:20px;
box-shadow:0 10px 20px rgba(0,0,0,.15);
}

.card-header{
background:#6D4C41;
color:white;
font-size:24px;
font-weight:bold;
}

.form-control,
.form-select{
margin-bottom:15px;
height:50px;
}

textarea{
height:120px!important;
}

.btn-save{
background:#6D4C41;
color:white;
width:100%;
height:50px;
font-size:18px;
border:none;
}

.btn-save:hover{
background:#4E342E;
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<div class="card-header">
✏ Edit Product
</div>

<div class="card-body">

<form method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<input
type="text"
name="product_name"
class="form-control"
value="<?php echo $row['product_name']; ?>"
required>

<select
name="category"
class="form-select"
required>

<option <?php if($row['category']=="BambooCrafts") echo "selected"; ?>>BambooCrafts</option>

<option <?php if($row['category']=="Wool products") echo "selected"; ?>>Wool products</option>

<option <?php if($row['category']=="Papad Varities") echo "selected"; ?>>Papad Varities</option>

<option <?php if($row['category']=="Honey") echo "selected"; ?>>Honey</option>

<option <?php if($row['category']=="pickle") echo "selected"; ?>>pickle</option>

<option <?php if($row['category']=="pulses") echo "selected"; ?>>pulses</option>

<option <?php if($row['category']=="Vermicelli") echo "selected"; ?>>Vermicelli</option>

<option <?php if($row['category']=="Soils") echo "selected"; ?>>Soils</option>

<option <?php if($row['category']=="Pottery") echo "selected"; ?>>Pottery</option>

<option <?php if($row['category']=="Other") echo "selected"; ?>>Other</option>

</select>

<input
type="number"
name="price"
class="form-control"
value="<?php echo $row['price']; ?>"
required>

<input
type="number"
name="quantity"
class="form-control"
value="<?php echo $row['quantity']; ?>"
required>

<textarea
name="description"
class="form-control"
required><?php echo $row['description']; ?></textarea>

<button
type="submit"
name="update"
class="btn-save">

💾 Update Product

</button>

</form>

</div>

</div>

</div>

</body>

</html>