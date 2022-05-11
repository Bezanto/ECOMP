<?php
include_once 'connection.php';
$oid=$_GET['oid'];
$sql_status=mysqli_query($conn,"update orders set status='Delivered' where orderid=$oid");
if(!$sql_status){
    echo 'Failed To Update Status!!!';
}
else{
    header('location:admin_view_orders.php');
}



?>