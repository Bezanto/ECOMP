<?php
if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['details']))
{
include_once 'connection.php';
$conn = new mysqli('localhost','root','','ecomp');
if($conn->connect_error){
    echo 'Sql connection Error!!!';
    die;
}

date_default_timezone_set("Asia/Kolkata");
$unique_name = date('d_m_Y_H_i_s');
$unique_name= $unique_name.'.jpg'; 
move_uploaded_file($_FILES['imname']['tmp_name'],$unique_name);


$name = $_POST["name"];
$details = $_POST["details"];
$price = $_POST["price"];

$cmd = "insert into prod(name,details,price,imname) values('$name','$details','$price','$unique_name')"; 
$sql_status=mysqli_query($conn,$cmd);
if($sql_status){
    header('location:admin_upload_products_fe.php');
}
else echo $sql_status;
}
else{
    echo '<h1 style="color:red">Unauthourised Attempt</h1>';
}

?>