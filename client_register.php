<?php
include_once 'connection.php';

$name=$_POST['uname'];
$upass=$_POST['upass'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

$sql_status = mysqli_query($conn,"insert into users values('$name','$upass','$mobile','$address')");

if($sql_status){
    echo "<h1 style='color:green'>Registration Success</h1>
    <a href='client_login.html'>Login Here</a>
    ";
}
else{
    echo "<h1 style='color:red'>Registration Failed</h1>";
}
?>