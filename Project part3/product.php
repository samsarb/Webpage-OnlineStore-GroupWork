<?php
include_once 'connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
if ($result = $connection->query($sql)) {
    $product = $result->fetch_object();}
?>

<!DOCTYPE html>
<html>
<!--Links-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="searchstyle.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<meta charset="UTF-8">

<head>
    <!--header-->
    <title><?php echo "$product->Name" ?></title>
</head>

<body>
    <!--Navigatio bar-->
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

    <!--main image-->

   
    <?php
        echo "<img src='images/$product->Image.jpg'>"; 
    ?>
   
    <h1 id="product-title" onclick=PriceCalculation()><?php echo "$product->Name" ?></h1>


    <!--rating section-->
    <div class="star">
        <?php
         $j=0;
         while ($j<5){
             $class="fa fa-star";
             if($j < $product->Rating){
                 $class = 'fa fa-star checked';
             }
             echo"<span class='$class'></span>";
             $j++;
         };
        ?>
    </div>

    <!--Quantity and Price-->
    <?php
    include_once "product_page.php";
    echo "<div id='price'>";
    $price=$product->Price;
    echo "$price"; 
    echo "</div>";
     ?>


    <select id='quantity' value='quantity' name='quantity' placeholder="Quantity" oninput="PriceCalculation()">;
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
    <option value='6'>6</option>
    </select><br></br>

    <!--size form-->
    <form>
        <label for="Size"></label>
        <select id="Size" name="Size">
            <option>Select Size</option>
            <option value="one size">One size</option>
        </select>
    </form>
    <br></br>
    
    <!--adding to cart section-->
    <button class="add">Add to Cart</button>

    <!--description-->
    <div class="description">
        <h2>Description</h2>
        <div id="description"><?php echo "$product->Description" ?></div>
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

</html>