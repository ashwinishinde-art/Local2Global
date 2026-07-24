<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local2Global | Customer Registration</title>

    <link rel="stylesheet" href="customer_regi.css">
</head>

<body>

    <div class="container">

        <!-- Left Panel -->

        <div class="left-panel">

            <h1>Local2Global</h1>

            <p>Connecting Village Artisans with the World</p>

            <div class="logo-box">
                <img src="logo.png" alt="Local2Global Logo" class="logo">
            </div>

            <h3>Support Handmade Products ❤️</h3>

        </div>

        <!-- Right Panel -->

        <div class="right-panel">

            <h2>Customer Registration</h2>

            <form action="save_customer.php" method="POST">

                <div class="input-box">
                    <input type="text" name="full_name" placeholder="Full Name" required>
                </div>

                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                </div>

                <div class="input-box">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>

                <div class="input-box">
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="input-box">
                   <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>

                <div class="input-box">
                    <select name="gender">
                        <option>Select Gender</option>
                        <option>Female</option>
                        <option>Male</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="full-width">
                   <textarea name="address" placeholder="Enter Your Address"></textarea>
                </div>

                <div class="input-box">
                   <input type="text" name="city" placeholder="City">
                </div>

                <div class="input-box">
                   <input type="text" name="state" placeholder="State">
                </div>

                <div class="input-box">
                    <input type="text" name="pincode" placeholder="Pincode">
                </div>

                <div class="full-width checkbox">
                    <input type="checkbox">
                    <span>I agree to the Terms & Conditions</span>
                </div>

                <div class="full-width">
                    <button type="submit">Register</button>
                </div>

                
            </form>

        </div>

    </div>

</body>

</html>