<?php
    include_once 'connection.php';

    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

$sql_res = mysqli_query($conn,"select * from users where uname='$uname' and upass='$upass'");

$row_count = mysqli_num_rows($sql_res);
if($row_count==0){
    echo "<h1 style='color:red'>Invalid Login</h1>";
}
else if($row_count==1){
    $row = mysqli_fetch_assoc($sql_res);
    $uname = $row['uname'];
    $mobile = $row['mobile'];
    $address = $row['address'];
    session_start();
    $_SESSION["uname"]=$uname;
    $_SESSION["mobile"]=$mobile;
    $_SESSION["address"]=$address;
    $_SESSION["cart"]=array();
    header('location:client_view_products.php');
}
?>