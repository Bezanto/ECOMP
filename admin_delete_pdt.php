<?php
include_once 'connection.php';
$pdt_id=$_GET['pdt_id'];
echo 'Recieved pdt id='.$pdt_id;
$sql_status=mysqli_query($conn,"delete from prod where id= $pdt_id");
if($sql_status){
    header('location:admin_view_products.php');
}
else{
    echo "Error Occurred!!!";
}


?>