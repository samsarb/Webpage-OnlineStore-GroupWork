<?php
include_once 'connect.php';


$sql = "SELECT * FROM products";
if ($result = $connection->query($sql)) {
    $product = $result->fetch_object();}
    $price=$product->Price;

    ?>
<script>
function PriceCalculation() {
    var price = <?=$price?>;
    var quantity = document.getElementById("quantity").value;

    var total = (price * quantity).toFixed(2);
    var total= "$ " + total;
    document.getElementById("price").innerHTML = total;
} </script>