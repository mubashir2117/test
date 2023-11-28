<?php
require "config.php";

$img=$_FILES["imag"];

$imgName = $img['name'];
$tempPath = $img['tmp_name'];
$myPath= "images/".$imgName;

move_uploaded_file($tempPath, $myPath);

$query = "INSERT INTO `products` (`product_image`) VALUES ('$myPath')";

mysqli_query($conn, $query)




?>