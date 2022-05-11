<?php
include_once 'connection.php';
session_start();
$uname=$_GET['uname'];
$umobile=$_GET['umobile'];
$uaddress=$_GET['uaddress'];
print_r($_GET);
$cart=$_SESSION['cart'];
for($i=0;$i<count($cart);$i++){
    $pid=$cart[$i];
    $cmd="insert into orders(cname,cmobile,caddress,pid) values('$uname','$umobile','$uaddress',$pid);";

    $sql_status=mysqli_query($conn,$cmd);
    if(!$sql_status){
        echo"error in sql";
        die;
    }
    $_SESSION['cart']=array();
    header('location:client_view_cart.php');
}
?>