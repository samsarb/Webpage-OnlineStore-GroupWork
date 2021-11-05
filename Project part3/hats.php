<?php
include_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<!--links-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="searchstyle.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<meta charset="UTF-8">
<link rel="stylesheet" href="navigationstyle.css">

<!--header section-->

<head>
    <title>ADD-ON : Men's Hats </title>
</head>

<!--body section-->

<body>
    <!--navigation bar-->
    <div class="nav">
        <ul>
            <li><a href="#"></a><img src="logo.png" class="logo-image"></a></li>
            <li><a href="http://localhost:7331/part3/index.php">Home</a></li>
            <li><a href="http://localhost:7331/part3/MensPage.php">Men</a>
                <ul>
                    <li><a href="http://localhost:7331/part3/Watches.php">Watches</a></li>
                    <li><a href="http://localhost:7331/part3/hats.php">Hats</a>
                    <li><a href="http://localhost:7331/part3/Sunglasses.php">Sunglasses</a>
                </ul>
            </li>
            <li><a href="http://localhost:7331/part3/WomensPage.php">Women</a>
                <ul>
                    <li><a href="http://localhost:7331/part3/Women%20Bag.php">Bags</a></li>
                    <li><a href="http://localhost:7331/part3/Jewellery.php">Jewelry</a>
                    <li><a href="http://localhost:7331/part3/Hair%20Clips.php">Hair Clips</a>
                </ul>
            </li>
            <li><a href="http://localhost:7331/part3/KidsPage.php">Kids</a>
                <ul>
                    <li><a href="http://localhost:7331/part3/Kids%20Hats.php">Hats</a></li>
                    <li><a href="http://localhost:7331/part3/Kids%20Hair%20Clips.php">Hair Clips</a>
                    <li><a href="http://localhost:7331/part3/Kids%20Hair%20Bands.php">Hair Bands</a>
                </ul>
            </li>
        </ul>
    </div>

    <h1>Hats</h1>

    <!--first product-->
    <div class="ProductPage">

        <img src="images/hats1.jpg">
        <br>
        <a href="http://localhost:7331/part3/product.php?id=27">Black Royals Snapback</a>
        <p> Price: $100.99 </p>
        <br></br>

    </div>

    <!--second product-->
    <div class="ProductPage">

        <img src="images/hats2.jpg">
        <br>
        <a href="http://localhost:7331/part3/product.php?id=4">Red Grey Brafr Snapback</a>
        <p>Price: $111.99</p>
        <br></br>


    </div>

    <!--third product-->
    <div class="ProductPage">
        <img src="images/hats3.jpg">
        <br>
        <a href="http://localhost:7331/part3/product.php?id=5">Black Red Nitro Hat</a>
        <p>Price: $69.99 </p>
        <br></br>


    </div>

    <!--search bar section-->
    <?php
    include "view/search.php";  
    ?>

    <!--shopping cart-->
    <div class="shopping-cart">
        <botton id="shopping-text">Shopping Cart</botton>
        <i class="fas fa-shopping-cart"></i>
    </div>



</body>

<!--Footer Section-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="ft-col">
                <!--about-->
                <h4>About</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="ft-col">
                <!--company section-->
                <h4>Company</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Return</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Payement Option</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="ft-col">
                <!--product section-->
                <h4>Product</h4>
                <ul>
                    <li><a href="#">Jewellery</a></li>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">Hat</a></li>
                    <li><a href="#">Bag</a></li>
                    <li><a href="#">Sunglasses</a></li>
                    <li><a href="#">Hair Clips</a></li>
                    <li><a href="#">Kids Hat</a></li>
                    <li><a href="#">Kids Hair band</a></li>
                    <li><a href="#">Kids Hair Clips</a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="ft-col">
                <!--social media-->
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>

                </div>
            </div>
        </div>
    </div>
</footer>

<script src="Javascript.js"></script>
</html>