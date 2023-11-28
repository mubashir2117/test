<?php
include ("config.php");
if(isset($_POST['submit'])){
$product_name = $_POST["product_name"];
$product_description = $_POST["product_description"];
$product_price = $_POST["product_price"];

$availability = $_POST["availability"];

$img=$_FILES["imag"];

$imgName = $img['name'];
$tempPath = $img['tmp_name'];
$myPath= "images/".$imgName;


move_uploaded_file($tempPath,$myPath);


$query = "INSERT INTO `products`(`product_name`, `product_description`, `product_price`,  `product_image`, `availability`) 
VALUES ('$product_name','$product_description','$product_price','$myPath','$availability')";

$result = mysqli_query($conn , $query);

if($result){
    header("Location: addproduct.php ");
    echo "Record Insert";
}
else{
    echo "Error";
    }
}