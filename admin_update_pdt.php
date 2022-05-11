<?php
if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['details']) && isset($_POST['pdt_id']))
{
include_once 'connection.php';
$pdt_id = $_POST['pdt_id'];
$conn = new mysqli('localhost','root','','ecomp');
if($conn->connect_error){
    echo 'Sql connection Error!!!';
    die;
}

date_default_timezone_set("Asia/Kolkata");
$unique_name = date('d_m_Y_H_i_s');
// echo $unique_name; 
$unique_name= $unique_name.'.jpg'; 
move_uploaded_file($_FILES['imname']['tmp_name'],$unique_name);


$name = $_POST["name"];
$details = $_POST["details"];
$price = $_POST["price"];

$cmd = "update prod set name='$name' ,details='$details',price=$price, imname='$unique_name' where id = $pdt_id"; 
$sql_status=mysqli_query($conn,$cmd);
if($sql_status){
    header('location:admin_view_products.php');
}
else
{
    echo 'Error'.$sql_status;
} 
}
else{
    echo '<h1 style="color:red">Unauthourised Attempt</h1>';
}

?>