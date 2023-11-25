<?php
include ("config.php");

$product_name = $_GET["product_name"];
$product_description = $_GET["product_description"];
$product_price = $_GET["product_price"];
$product_image = $_GET["product_image"];
$availability = $_GET["availability"];

$query = "INSERT INTO `products`(`product_name`, `product_description`, `product_price`,  `product_image`, `availability`) 
VALUES ('$product_name','$product_description','$product_price','$product_image','$availability')";

$result = mysqli_query($conn , $query);

if($result){
    echo "Record Insert";
}
else{
    echo "Error";
}