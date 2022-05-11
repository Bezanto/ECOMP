<?php
include_once 'connection.php';
include 'admin_nav.html';
$sql_result = mysqli_query($conn,"select * from orders where status='Pending'");
echo "<table class='table table-striped'>
        <tr>
            <td>Order Id </td>
            <td>Client Name </td>
            <td>Client Mobile </td>
            <td>Ordered Product </td>
            <td>Delivery Address </td>
            <td>Action </td>
        </tr>

";
while($row=mysqli_fetch_assoc($sql_result))
{
    $order_id=$row['orderid'];
    $cname=$row['cname'];
    $cmobile=$row['cmobile'];
    $pid=$row['pid'];
    $caddress=$row['caddress'];
    echo"
     <tr>
    <td>$order_id</td>
    <td>$cname </td>
    <td>$cmobile</td>
    <td><a href='view_single_product.php?pid=$pid'>$pid</a></td>
    <td>$caddress</td>
    <td>
    <a href='update_order_status.php?oid=$order_id'>
    <button class='btn btn-primary'>Set As Delivered</button>
    </a>
    </td>
    
</tr>
    ";

}


?>

<html>
<head>
   <title>Admin View Orders</title>
   <link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="js\bootstrap.min.js" rel="stylesheet">
    <link href="css\fontawesome.min.css" rel="stylesheet"> 
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
</head>
<body>
    
</body>
</html>