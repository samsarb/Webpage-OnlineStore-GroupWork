<?php
include_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="searchstyle.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<!--head section-->

<head>
    <title>ADD-ON : Women Bag </title>
</head>
<!--body section-->

<body>
    <!--Navigation bar-->
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


    <h1>Bags</h1>
    <!--first product-->
    <div class="ProductPage">

        <img src="images/b1.jpg">
        <br>
        <a href="http://localhost:7331/part3/product.php?id=9"> Beach Bag </a>
        <p> Price: $60.99 </p>
        <br><br>

    </div>
    <!--second product-->
    <div class="ProductPage">

        <img src="images/b2.jpg">
        <br>
        <a href="http://localhost:7331/part3/product.php?id=10"> Sport leather bag </a>
        <p> Price: $49.99 </p>
        <br><br>

    </div>
    <!--third product-->
    <div class="ProductPage">
        <img src="images/b4.jpg">
        <br>
        <a href="http://localhost:7331/part3/product.php?id=11"> Golden luxury bag </a>
        <p> Price: $99.99 </p>
        <br><br>

    </div>
    <!--search bar section-->
    <div class="searchbox">
        <input type="text" class="searchtext" placeholder="Type to search" title="Type in a name">
        <a class="fas fa-search" href="search page.html"></a>
    </div>
    <!--shopping cart-->
    <?php
    include "view/search.php";  
    ?>


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