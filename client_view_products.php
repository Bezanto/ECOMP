<html>

<head>
    <title>Shop Now!!!</title>
    <link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="js\bootstrap.min.js" rel="stylesheet">
    <link href="css\fontawesome.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
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

        .bleach {

            color: red;
            background: rgb(36, 21, 0);
            background: linear-gradient(75deg, rgba(36, 21, 0, 1) 0%, rgba(102, 7, 94, 1) 19%, rgba(56, 70, 198, 1) 49%, rgba(156, 12, 157, 1) 81%, rgba(191, 55, 47, 1) 100%, rgba(201, 60, 42, 1) 100%, rgba(108, 104, 18, 1) 100%);

        }
        .cart-parent{
            position:relative
        }
        .cart_count{
            position:absolute;
            background-color:tomato;
            font-size:20px;
            border-radius:40%;
            width: 30px;
            height:30px;
            right:-10px;
            top:-10px;
        }
    </style>
</head>

<body>

</body>

</html>

<?php
session_start();
if(isset($_SESSION['cart'])){
$cart = $_SESSION['cart'];
$cart_count=count($cart);
}
// print_r($cart);
else{
    $cart_count=0;
}
include_once 'connection.php';
$sql_res=mysqli_query($conn,"select * from prod");
$row_count = mysqli_num_rows($sql_res);
echo "<div class='jumbotron bleach'>
<h1 class='text-center' style='font-size:65px'>View Products</h1>
<div class='d-flex justify-content-end'>
<a class='px-4'>
        <div class='cart-parent'>
        <a class='' href='client_view_cart.php'>
        <button class='btn bg-warning'><i class='text-success fa fa-3x fa-shopping-cart'></i></button>
                <span class='cart_count text-center text-white'>$cart_count</span>
        </a>
        </div>
        <a class='' href='logout.php'>
        <button class='btn bg-danger ml-4'><i class='text-white fa fa-3x fa-power-off'></i></button>
        </a>
</a>
</div>
</div>
";

echo "<div class='d-flex flex-wrap ml-5'  >";
for($i=0;$i<$row_count;$i++){

    $row = mysqli_fetch_assoc($sql_res);
    $pid=$row['id'];
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
</div>

";

}
  ?>