<?php
include("config.php");
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <form class="form w-50 mt-4 mx-auto p-3 bg-light rounded-2" action="productuser.php" method="POST" enctype="multipart/form-data">
        <h6 class= "text-center display-5 text-uppercase">Add Product</h6>
        <input class="form-control p-1 mt-2 border border-success p-2" type="text" placeholder="Enter Product_Name " name="product_name">
        <input class="form-control p-1 mt-2 border border-success p-2" type="text" placeholder="Enter Product_Description " name="product_description">
        <input class="form-control p-1 mt-2 border border-success p-2" type="number" placeholder="Enter Product_Price " name="product_price">
        <input type="file" name="imag">
        
        <input class="form-control p-1 mt-2 border border-success p-2" type="number" placeholder="Enter Product_Availability" name="availability">

        <button class="btn btn-primary w-100  mt-3" type="submit" name="submit" >Submit</button>
    </form>

</body>
</html>
