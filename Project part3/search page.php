<?php
ini_set('display_errors', 1);
include_once 'connect.php';
$q = $_GET['q'];
$sql = "SELECT * FROM products WHERE Name LIKE '%$q%'";
?>

<!DOCTYPE html>
<html>
<!--links-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="searchstyle.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<meta charset="UTF-8">

<head>
    <!--header-->
    <title>Search Page </title>
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

    <div class="leftgrid">
        <div class="sorting">
            <p>Sorting by</p>
            <input type="radio" class="sorting_checkbox" name="sortprice" id="lowtohigh" onclick="sortProductslth()">
            <label class="sort-check-box" for="lowtohigh">Sort by price: Low-High</label><br></br>

            <input type="radio" class="sorting_checkbox" name="sortprice" id="hightolow" onclick="sortProductshtl()">
            <label class="sort-check-box" for="hightolow">Sort by price: High-Low</label>
        </div>
        <div class="filtering">
            <div class="filter_by_price">
                <p>Filtering by price:</p>
                <input type="radio" class="filtering_checkbox" name="pricefilter" id="fifty"
                    onclick="filterProducts1()">
                <label class="filter-check-box" for="fifty"> $ 0-50</label><br></br>
                <input type="radio" class="filtering_checkbox" name="pricefilter" id="hundred"
                    onclick="filterProducts2()">
                <label class="filter-check-box" for="hundred"> $ 50-100</label><br></br>
                <input type="radio" class="filtering_checkbox" name="pricefilter" id="hundredfifty"
                    onclick="filterProducts3()">
                <label class="filter-check-box" for="hundredfifty"> $ 100-150</label><br></br>
            </div>

            <!--divition to filter based on ratings between 1 to 5 stars-->
            <div class="filter_by_rate">
                <p>Filtering by rate:</p>
                <div class="rate_one">
                    <span class="fa fa-star checked" onclick=ratefilter()></span>
                    <span class="fa fa-star" onclick=ratefilter()></span>
                    <span class="fa fa-star" onclick=ratefilter()></span>
                    <span class="fa fa-star" onclick=ratefilter()></span>
                    <span class="fa fa-star" onclick=ratefilter()></span>
                </div>
                <div class="rate_two">
                    <span class="fa fa-star checked" onclick=ratefilter2()></span>
                    <span class="fa fa-star checked" onclick=ratefilter2()></span>
                    <span class="fa fa-star" onclick=ratefilter2()></span>
                    <span class="fa fa-star" onclick=ratefilter2()></span>
                    <span class="fa fa-star" onclick=ratefilter2()></span>
                </div>
                <div class="rate_three">
                    <span class="fa fa-star checked" onclick=ratefilter3()></span>
                    <span class="fa fa-star checked" onclick=ratefilter3()></span>
                    <span class="fa fa-star checked" onclick=ratefilter3()></span>
                    <span class="fa fa-star" onclick=ratefilter3()></span>
                    <span class="fa fa-star" onclick=ratefilter3()></span>
                </div>
                <div class="rate_four">
                    <span class="fa fa-star checked" onclick=ratefilter4()></span>
                    <span class="fa fa-star checked" onclick=ratefilter4()></span>
                    <span class="fa fa-star checked" onclick=ratefilter4()></span>
                    <span class="fa fa-star checked" onclick=ratefilter4()></span>
                    <span class="fa fa-star" onclick=ratefilter4()></span>
                </div>
                <div class="rate_five">
                    <span class="fa fa-star checked" onclick=ratefilter5()></span>
                    <span class="fa fa-star checked " onclick=ratefilter5()></span>
                    <span class="fa fa-star checked" onclick=ratefilter5()></span>
                    <span class="fa fa-star checked" onclick=ratefilter5()></span>
                    <span class="fa fa-star checked" onclick=ratefilter5()></span>
                </div>
            </div>
        </div>
    </div>

    
    <?php
    include "view/search.php";  
    ?>
    
    <?php
    if ($result = $connection->query($sql)) {
        echo "<div class='rightgrid' id='right'>";
        while ($obj = $result->fetch_object()) {
            echo "<div class='searchPage'>";
            echo "<a href='product.php?id=$obj->id'><img src='images/$obj->Image.jpg'/></a>";
            echo "<div class='products'>";
            echo "<a href='product.php?id=$obj->id'>$obj->Name</a>";
            echo "<p>$obj->Price</p>";
                echo "<div class='star'>";
                
                $j=0;
                while ($j<5){
                    $class="fa fa-star";
                    if($j < $obj->Rating){
                        $class = 'fa fa-star checked';
                    }
                    echo"<span class='$class'></span>";
                    $j++;
                };
            echo "</div></div></div>";

        }
        echo "</div>";
    }
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