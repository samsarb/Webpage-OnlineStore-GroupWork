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

<head>
    <!--header-->
    <title>ADD-ON : Kids Hair Clips </title>
</head>

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

    <h1>Hair Clips</h1>

    <!--kid's hats products-->
    <div class="ProductPage">
        <!--first product-->
        <img src="images/kids hair clips1.jpg" alt="Kids Hair Clips" title="Kids Hair Clips">
        <br>
        <a href="http://localhost:7331/part3/product.php?id=26">Fruity Hair Clips</a>
        <p> Price:$65.55 (10 per Pack) </p>
        <br><br>

    </div>
    <div class="ProductPage">
        <!--second product-->
        <img src="images/kids hair clips2.jpg" alt="Kids Hair Clips" title="Kids Hair Clips">
        <br>
        <a href="http://localhost:7331/part3/product.php?id=18">Pointy Hair Clips</a>
        <p>Price:$4.99 (10 per Pack) </p>
        <br><br>

    </div>


    <div class="ProductPage">
        <!--third product-->
        <img src="images/kids hair clips3.jpg" alt="Kids Hair Clips" title="Kids Hair Clips">
        <br>
        <a href="http://localhost:7331/part3/product.php?id=19">Colorful Stones</a>
        <p>Price:$2.99 (10 per pack)</p>

    </div>

    <!--search bar section-->
    <?php
    include "view/search.php";  
    ?>

    <!--shopping cart section-->
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
                <!--About Section-->
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

                <!--Company Section-->
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

                <!--Product Section-->
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

                <!--Social Media Section-->
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
