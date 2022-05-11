<html>
<head>
        <title>Item Details</title>
        <link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="js\bootstrap.min.js" rel="stylesheet">
    <link href="css\fontawesome.min.css" rel="stylesheet"> 
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
</head>
<body>
    <style>
        .pdt_img {
            width: 100%;
        }

        .parent {
            margin-top: 30px;
            height: 400px;
            width: 300px;
            padding: 10px;
            background: rgb(167, 131, 125);
            background: linear-gradient(90deg, rgb(167, 131, 125) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);

        }

        body {
            background: rgb(36, 21, 0);
            background: linear-gradient(90deg, rgba(36, 21, 0, 1) 0%, rgba(102, 7, 94, 1) 19%, rgba(201, 60, 42, 1) 48%, rgba(255, 0, 177, 1) 71%, rgba(120, 9, 121, 1) 100%);
            width: 100% !important;
        }

       


    </style>

</body>
</html>

<?php
include_once 'connection.php';
$pid=$_GET['pid'];
$sql_result=mysqli_query($conn,"select * from prod where id=$pid");
$row = mysqli_fetch_assoc($sql_result);
print_r($row);
$name=$row['name'];
$details=$row['details'];
$price=$row['price'];
$imname=$row['imname'];


echo "
<div style='margin-left:50px' class= 'ml-4 parent '>
<div class='d-flex justify-content-around   '>
<div><h2 class='text-white'>$name</h2></div>
<div><h4 class='text-white'>$$price</h4></div>
</div>
<img class='pdt_img' src='$imname' alt='Image Not Found!!!'>
<p class='text-white'>$details</p>
<div class'd-flex justify-content-around '>
<a href='addtocart.php?pid=$pid'>
<button class='btn btn-primary '>Add to Cart</button>
</a>
</div>
</div>";


?>