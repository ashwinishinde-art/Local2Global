<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Local2Global | Rural Marketplace</title>

<link rel="stylesheet" href="style.css">

</head>


<body>


<header>

<div class="logo">
<img src="logo.png"
alt="logo" height="100px" width="100px">
Local2Global
</div>


<div class="search">

<input type="text" placeholder="Search handmade products, organic foods...">

<button>🔍</button>

</div>


<nav>

<a href="index.php">Home</a>

<a href="#">Products</a>

<?php

if(isset($_SESSION['role']))
{

?>

<a href="profile.php">Profile</a>

<a href="logout.php">Logout</a>

<?php

}
else
{

?>

<a href="seller_register.php">Become Seller</a>

<a href="customer_register.php">Registration</a>

<a href="login.php">Login</a>

<?php

}

?>

<a href="about.html">About us</a>

</nav>


</header>





<section class="categories">

<div>Pickel</div>
<div> Pulses</div>
<div> Pottery</div>
<div> Honey</div>
<div>BambooCraft</div>
<div> Wool products</div>
<div>Papad-varieties</div>

</section>







<section class="hero">


<div class="hero-text">


<h1>
From Local Hands
<br>
To Global Hearts
</h1>


<p>

Connecting village entrepreneurs, artisans and farmers
with customers across the world.

</p>


<button>
Explore Products
</button>


<button class="seller" onclick="window.location.href='seller_register.php'">
    Become Seller
</button>

</div>



<img src="smart.jpg"
alt="Rural entrepreneurs">


</section>







<div class="main">


<aside>


<h2>
Categories
</h2>


<ul>

<li>pickel</li>
<li>pulses</li>
<li>Pottery</li>
<li>Honey</li>
<li>BambooCraft</li>
<li> Wool products</li>
<li>papad-varieties</li>
<li>Vermicelli and wheat fryums</li>
<li>cow dung and Gomutra</li>
<li>Soils</li>

</ul>


</aside>







<section class="products">


<h1>
⭐ Top Rated Products
</h1>



<div class="cards">


<div class="card">

<img src="honey.jpg">

<h3>Organic Honey</h3>

<p>⭐ 4.9 Rating</p>

<h2>₹1500</h2>

<button>Buy Now</button>

</div>





<div class="card">

<img src="basket.jpg">

<h3>Handmade Basket</h3>

<p>⭐ 4.8 Rating</p>

<h2>₹399</h2>

<button>Buy Now</button>

</div>





<div class="card">

<img src="papad.jpg">

<h3>Udit Papad</h3>

<p>⭐ 4.9 Rating</p>

<h2>₹299</h2>

<button>Buy Now</button>

</div>





<div class="card">

<img src="ghee.jpg">

<h3>Desii Ghee</h3>

<p>⭐ 4.7 Rating</p>

<h2>₹999</h2>

<button>Buy Now</button>

</div>



</div>


</section>


</div>














<section class="seller-section">


<h1>
Your Village. Your Skills. Your Global Market.
</h1>


<p>
Create your digital shop and sell worldwide.
</p>


<button onclick="window.location.href='seller_register.php'">
    Start Selling Today
</button>


</section>







<section class="stories">


<h1>
Success Stories
</h1>


<div class="story">

<h3> 🥣 Meena Jadhav – Vermicelli (Shevaya) Maker</h3>

<p>
"Handcrafted with care, now reaching homes across the city."
</p>

</div>



<div class="story">

<h3>☀️ Savita Mahila Group – Kurdai & Sande Makers
"</h3>

<p>
"Handcrafted with tradition, bringing authentic village taste to everyone.
</p>

</div>



<div class="story">

<h3>🏺 Kumar - Village Artisan</h3>

<p>
My handmade pottery reached new markets.
</p>

</div>


</section>







<footer>


<div>

<h2>
Local2Global
</h2>

<p>
Connecting rural talent with the world.
</p>

</div>


<div>

<h3>
Support</h3>

<p>Help Center</p>
<p>Contact Us</p>


</div>


<div>

<h3>
Entrepreneurs
</h3>

<p>Sell Products</p>
<p>Seller Dashboard</p>

</div>
<center><p>
<b>✨ Local2Global is a project created by:<br></b>  
Tanishka Poman, <br>  Amruta Dhekale, <br>Shraddha Dere & <br>Khushi Wankhade.
</center></p>


</footer>



</body>

</html>