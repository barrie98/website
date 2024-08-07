<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="../styles/header+summer-section.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>

<header class="header-section">
    <div class="navbar">               
        <nav class="left-section">
            <a href="../home.html"><img src="../images/Borcelle.png" class="logo"></a>
            <ul class="nav">
                    <li class="nav-li"><a href="../home.html">Home</a></li>
                    <li class="nav-li"><a href="">Categories<span class="material-symbols-outlined">
                             chevron_right
                        </span></a>
                    <ul class="dropdown">
                        <li class="dropdown-li"><a href="../causal.html">Causal Wear</a></li>
                        <li class="dropdown-li"><a href="../formal.html">Formal Wear</a></li>
                        <li class="dropdown-li"><a href="../summer.html">Summer Collection</a></li>
                        <li class="dropdown-li"><a href="../winter.html">Winter Collection</a></li>
                        <li class="dropdown-li"><a href="../accessories.html">Accessories</a></li>
                    </ul></li>
                    <li class="nav-li"><a href="../men.html">Men</a></li>
                    <li class="nav-li"><a href="../women.html">Women</a></li>
            </ul>
        </nav>
        <div class="right-section">
            <div class="search-bar"> 
                <div class="search">
                 <i class="fa-solid fa-magnifying-glass"></i>
                 <div class="search-tooltip">Search</div>
                </div>
                     <input type="text" placeholder="Search products">
                <div class="mic">
                 <i class="fa-solid fa-microphone"></i>
                 <div class="mic-tooltip">Search with your voice</div>
                </div>
                 </div>
            <div class="cart">
                <span class="material-symbols-outlined">
                    shopping_cart_checkout
                    </span>
                <div class="cart-tooltip">Add to Cart</div>
            </div>
            <div class="user">
                <a href="../Login_Register/login.php"><span class="material-symbols-outlined">
                    account_circle
                    </span></a>
                <div class="user-tooltip">Your Account</div>
            </div>
        </div>
    </div>
    </header>

  <div class="header">
  	<h2>Register/Sign Up</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php" id="login">Sign in</a>
  	</p>
  </form>

  <footer class="footer">
        <div class="products">
            <div class="product-title">Products &colon;</div>
            <ul>
                <li><a href="../causal.html">Casual Wear</a></li>
                <li><a href="../formal.html">Formal Wear</a></li>
                <li><a href="../summer.html">Summer Collection</a></li>
                <li><a href="../winter.html">Winter Collection</a></li>
                <li><a href="../men.html">Men's Wear</a></li>
                <li><a href="../women.html">Women's Wear</a></li>
                <li><a href="../accessories.html">Accessories</a></li>
            </ul>
        </div>
         <div class="services">
            <div class="service-title">Services &colon;</div>
            <ul>
                <li><a href="../about_us.html">About Us</a></li>
                <li><a href="">Shipping</a></li>
                <li><a href="">Track Your Order</a></li>
                <li><a href="">Returns</a></li>
                <li><a href="">FAQs</a></li>
                <li><a href="../customer_care.html">Customer Care</a></li>
            </ul>
        </div>
        <div class="follow-us">
                <div class="follow-us-title">Follow Us On &colon;</div>
                <a href="https://www.facebook.com/"><div class="facebook"><i class="fa-brands fa-facebook"></i></div></a>
                <a href="https://www.instagram.com/"><div class="instagram"><i class="fa-brands fa-instagram"></i></div></a>
                <a href="https://twitter.com/"><div class="twitter"><i class="fa-brands fa-square-twitter"></i></div></a>
                <a href="https://www.linkedin.com/"><div class="linkedin"><i class="fa-brands fa-linkedin"></i></div></a>
        
                <div class="contact-us">
                    <div class="contact-us-title">Contact Us &colon;</div>
                    <a href="#"><i class="fa-solid fa-phone"></i><span>+977-9805499729</span></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i><span>brocellespies@gmail.com</span></a>
                    <a href="#"><i class="fa-solid fa-location-dot"></i><span>Butwal-11, Devinagar, Rupandehi, Nepal</span></a>
                </div>
            </div>
        </footer>

</body>
</html>