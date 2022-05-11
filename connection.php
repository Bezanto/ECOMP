<?php
$conn = new mysqli('localhost','root','','ecomp');
if($conn->connect_error){
    echo 'Sql connection Error!!!';
    die;
}
?>