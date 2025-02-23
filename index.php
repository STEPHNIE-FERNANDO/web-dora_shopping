<?php
session_start(); // start the session. check login status
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dora Online Shopping</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!--top bar-->
<div class="header">
    <div class="left">
        <a href="#">Download App</a>
        <span class="separator">|</span>
        <a href="#">Contact Us</a>
        <span class="separator"></span>
        <a href="#">Wishlist</a>
    </div>
    <div class="right">
        <span>Need Help :</span>
        <a href="tel:+94716843092">+94 70 222 2233</a>
        <span class="separator">|</span>
        <span>Global Shopping Now Available For Affordable Price</span>
    </div>
</div>

<!--Main Header-->
<header class="main-header">
    <div class="logo">
        <img src="image/dora.png" height="60px" width="60px">
    </div>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="#">Promotion</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
    </nav>

<!--search bar-->
<div class="search-container">
    <input type="text" placeholder="Search Dora..." class="search-input">
            <button class="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m-3.15 1.35A7.5 7.5 0 1 1 18 9.5a7.5 7.5 0 0 1-4.5 8.5z"/>
                </svg>
            </button>
</div>


<!--icon cart-->
<div class="icon-cart">
    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
    </svg>                
    <span>0</span>
</div>

<!-- Login Button -->
<div class="login-container">
    <?php if (isset($_SESSION['username'])): ?>
        <button class="login-button"><?php echo htmlspecialchars($_SESSION['username']); ?></button>
    <?php else: ?>
        <a href="login.php" class="login-button">Login</a>
        <?php endif; ?>
</div>
</header>

<!-- FontAwesome for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
<!-- Slider Section -->
<section class="slider">
        <div class="slide" style="background-image: url('image/1.jpg');">
            <div class="promo-content"></div>
        </div>
        <div class="slide" style="background-image: url('image/2.jpg');">
            <div class="promo-content"></div>
        </div>
        <div class="slide" style="background-image: url('image/3.jpg');">
            <div class="promo-content"></div>
        </div>

<!-- Navigation Buttons -->
    <button class="prev-slide">&#10094;</button>
        <button class="next-slide">&#10095;</button>
    </section>

    <div class="container">
        <br>  
        <div class="listProduct"></div>
    </div>
    
    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart"></div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut">Check Out</button>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>
