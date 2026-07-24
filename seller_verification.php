<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Seller Verification | Local2Global</title>

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
background:linear-gradient(135deg,#FFF6F8,#FFE8EF,#EEF6FF);
min-height:100vh;
padding:40px;
display:flex;
justify-content:center;
align-items:center;
overflow-x:hidden;
}

.circle{
position:fixed;
border-radius:50%;
filter:blur(70px);
opacity:.45;
z-index:0;
}

.c1{
width:260px;
height:260px;
background:#ff9db6;
top:-80px;
left:-80px;
}

.c2{
width:320px;
height:320px;
background:#8fd3ff;
bottom:-100px;
right:-100px;
}

.container-box{
width:1100px;
background:rgba(255,255,255,.72);
backdrop-filter:blur(20px);
border-radius:30px;
padding:40px;
box-shadow:0 20px 60px rgba(0,0,0,.12);
position:relative;
z-index:1;
}

.logo{
text-align:center;
margin-bottom:20px;
}

.logo img{
width:90px;
}

.logo h2{
margin-top:10px;
color:#B76E8A;
font-weight:700;
}

.step{
text-align:center;
margin-bottom:25px;
}

.step h4{
font-weight:700;
color:#444;
}

.progress{
height:12px;
border-radius:10px;
margin-top:15px;
}

.progress-bar{
background:linear-gradient(90deg,#D88BA5,#B76E8A);
width:66%;
}

.section-title{
margin-top:30px;
margin-bottom:15px;
font-weight:700;
color:#B76E8A;
border-left:5px solid #B76E8A;
padding-left:10px;
}

.form-control,
.form-select{
height:52px;
border-radius:12px;
margin-bottom:18px;
}

textarea.form-control{
height:90px;
resize:none;
}

.upload-box{
border:2px dashed #D88BA5;
border-radius:12px;
padding:18px;
text-align:center;
background:#fff;
margin-bottom:18px;
}

.upload-box input{
margin-top:10px;
}

.btn-next{
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

.btn-next:hover{
transform:translateY(-2px);
box-shadow:0 10px 20px rgba(183,110,138,.35);
}

</style>

</head>

<body>

<div class="circle c1"></div>
<div class="circle c2"></div>

<div class="container-box">

<div class="logo">
<img src="logo.png">
<h2>Seller Verification</h2>
</div>

<div class="step">
<h4>Step 2 of 3</h4>

<div class="progress">
<div class="progress-bar"></div>
</div>

<p class="mt-3">
Complete your verification to start selling on <b>Local2Global</b>.
</p>
</div>

<form action="save_verification.php" method="POST">
<h5 class="section-title">
<i class="bi bi-bank"></i> Bank Details
</h5>

<div class="row">

<div class="col-md-6">
<input type="text" class="form-control" name="account_holder" placeholder="Account Holder Name" required>
</div>

<div class="col-md-6">
<input type="text" class="form-control" name="bank_name" placeholder="Bank Name" required>
</div>

<div class="col-md-6">
<input type="text" class="form-control" name="branch_name" placeholder="Branch Name" required>
</div>

<div class="col-md-6">
<input type="text" class="form-control" name="account_number" placeholder="Account Number" required>
</div>

<div class="col-md-6">
<input type="text" class="form-control" name="confirm_account_number" placeholder="Confirm Account Number" required>
</div>

<div class="col-md-6">
<input type="text" class="form-control" name="ifsc" placeholder="IFSC Code" required>
</div>

</div>
<h5 class="section-title">
<i class="bi bi-person-vcard"></i> Identity Verification
</h5>

<div class="row">

<div class="col-md-6">

<select
class="form-select"
name="id_proof"
required>

<option value="">Select ID Proof</option>

<option>Aadhaar Card</option>

<option>PAN Card</option>

<option>Driving Licence</option>

<option>Voter ID</option>

</select>

</div>

<div class="col-md-6">

<input
type="text"
class="form-control"
name="id_proof_number"
placeholder="Enter ID Proof Number"
required>

</div>

</div>

<h5 class="section-title">

<i class="bi bi-house"></i>

Address Proof

</h5>

<div class="row">

<div class="col-md-6">

<select
class="form-select"
name="address_proof"
required>

<option value="">Select Address Proof</option>

<option>Aadhaar Card</option>

<option>Electricity Bill</option>

<option>Passport</option>

<option>Driving Licence</option>

<option>Voter ID</option>

</select>

</div>

<div class="col-md-6">

<input
type="text"
class="form-control"
name="address_proof_number"
placeholder="Enter Address Proof Number"
required>

</div>

</div>


<h5 class="section-title">
<i class="bi bi-shop"></i> Business Details
</h5>

<div class="row">

<div class="col-md-6">

<input
type="text"
class="form-control"
name="gst"
placeholder="GST Number (Optional)">

</div>

<div class="col-md-6">

<input
type="text"
class="form-control"
name="business_reg"
placeholder="Business Registration No. (Optional)">

</div>

<div class="col-12">

<textarea
class="form-control"
name="shipping_area"
placeholder="Shipping Available In (Example: Pune, Mumbai, Nashik)"
required></textarea>

</div>

</div>

<div class="form-check mt-4 mb-4">

<input
class="form-check-input"
type="checkbox"
required
id="agree">

<label
class="form-check-label"
for="agree">

I certify that all the information provided is correct and belongs to me.

</label>

</div>

<button
type="submit"
class="btn-next">

Continue →

</button>

</form>

</div>

</body>
</html>