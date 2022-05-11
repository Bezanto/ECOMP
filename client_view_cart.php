<?php
include_once 'connection.php';
session_start();
$uname=$_SESSION['uname'];
$mobile=$_SESSION['mobile'];
$address=$_SESSION['address'];

$sum=0;
echo "
<a href='client_view_products.php'><br>
<button class='ml-4 btn btn-primary'>Back To Products</button></a><br><br>

";
if(isset($_SESSION['cart'])){
$cart=$_SESSION['cart'];
$cart_str=implode(",",$cart);
$sql_result=mysqli_query($conn,"select * from prod where id in ($cart_str)");

 echo "
<div class= 'd-flex flex-wrap w-100'>
    <div class='d-flex flex-wrap w-75'>";
if($sql_result==true){
while($row=mysqli_fetch_assoc($sql_result))
{
    $pid=$row['id'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $imname=$row['imname'];
    $sum=$sum+$price;

echo "
        <div style='margin-left:50px' class= 'ml-4 parent '>
            <div class='d-flex justify-content-around'>
            <div><h2 class='text-white'>$name</h2></div>
            <div><h4 class='text-white'>Rs.$price</h4></div>
            </div>
            <img class='pdt_img' src='$imname' alt='Image Not Found!!!'>
            <p class='text-white'>$details</p>
            <div class'd-flex justify-content-evenly'>
            <a href='remove_from_cart.php?pid=$pid'><button class='btn btn-primary '>Remove From Cart</button></a>
            </div>
        </div>

";
}
}
else {
    echo "
<br><h1 class=' ml-5 text-white '>Cart is Empty</h1><br>
    ";
} 
echo "
<br>
</div>
<div class='flex wrap w-25 border bleach '><br>
<h1 style='color:yellow;font-size:30px'>Username:$uname</h1>
<h1 style='color:gold;font-size:30px''>Mobile:$mobile</h1>
<h1 style='color:red'>Grand Total:<span style='color:rgb(0, 255, 85)'>$$sum</span> </h1>
<span style='color:yellow;font-size:24px'>Address:</span>   
<textarea rows=3 style='width:75%; background:navy'class='ml-3 text-white'>$address</textarea><br><br>
<a href='client_payment.php?uname=$uname&umobile=$mobile&uaddress=$address'>
<button class='ml-4 btn btn-secondary'>Proceed To Payment</button>
</a>
</div>";
}

else{
    echo '
<h1 class="text-center" style="color:red">Unauthourised Attempt</h1>';
}
?>

<html>

<head>
    <title>View Cart</title>
    <link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="js\bootstrap.min.js" rel="stylesheet">
    <link href="css\fontawesome.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>

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
        }
        .bleach{
            color: red;
            background: rgb(36, 21, 0);
            background: linear-gradient(75deg, rgba(36, 21, 0, 1) 0%, rgba(102, 7, 94, 1) 19%, rgba(56, 70, 198, 1) 49%, rgba(156, 12, 157, 1) 81%, rgba(191, 55, 47, 1) 100%, rgba(201, 60, 42, 1) 100%, rgba(108, 104, 18, 1) 100%);

        }
    </style>
</body>

</html>