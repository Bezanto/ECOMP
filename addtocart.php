<?php
session_start();
$pid=$_GET['pid'];
$cart=$_SESSION['cart'];
$res=array_search($pid,$cart);
echo "$res";
if($res!==FALSE){
    echo "<script>alert('Product already added to Cart')</script>";
    // header("location:client_view_products.php");
}
else{
array_push($cart,$pid);
$_SESSION['cart']=$cart;
header("location:client_view_products.php");
}
?>