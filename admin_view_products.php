<html>

<head>
<link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="js\bootstrap.min.js" rel="stylesheet">
    <link href="css\fontawesome.min.css" rel="stylesheet"> 
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>

<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <title>View Products</title>
    <style>
        
        .pdt_img {
            width: 100%;
        }

        .parent {
            margin-top: 30px;
            height: 400px;
            width: 300px;
            padding: 10px;  
            background: rgb(167, 131, 125);
            background: linear-gradient(90deg, rgb(167, 131, 125) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);
            
        }

        body {
            background-color: lightgray;
            width: 100% !important;
        }
    </style>



</head>

<body>

</body>

</html>
<?php
// if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['details']))
// {
include_once 'connection.php';
include 'admin_nav.html';


$sql_result=mysqli_query($conn,"select * from prod");
$total_rows=mysqli_num_rows($sql_result);

echo "<div class='d-flex flex-wrap ml-5'  >";
for($i=0;$i<$total_rows;$i++){
    $row = mysqli_fetch_assoc($sql_result);
    $pdt_id=$row['id'];

    $name=$row['name'];

    $details=$row['details'];

    $price=$row['price'];

    $imname=$row['imname'];

echo "
<div style='margin-left:50px' class='ml-4 parent '>
<div class='d-flex justify-content-around   '>
<div><h2 class='text-white'>$name</h2></div>
<div><h4 class='text-white'>Rs.$price</h4></div>
</div>
<img class='pdt_img' src='$imname' alt='Image Not Found!!!'>
<p class='text-white'>$details</p >
<div class'd-flex justify-content-around '>
<a href='admin_update_products.php?pdt_id=$pdt_id'>
    <button style='margin-left:15px' class='btn btn-warning'><i class='fa fa-edit text-white'></i></button>
    </a>
    <a href='admin_delete_pdt.php?pdt_id=$pdt_id'>
    <button class='btn btn-danger'  style='margin-left:165px' ><i class='fa fa-trash text-white'></i></button></a>
</div>
</div>

";
}
// }
// else{
//     echo '<h1 style="color:red">Unauthourised Attempt</h1>';
// }
?>

