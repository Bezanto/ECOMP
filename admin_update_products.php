<?php
$pdt_id = $_GET['pdt_id'];

?>
<html>

<head>
    <title>Update Products</title>
    <link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="js\bootstrap.min.js" rel="stylesheet"> 
    <link href="css\fontawesome.min.css" rel="stylesheet"> 
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
</head>

<body>

  
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <form enctype="multipart/form-data" method="post" action="admin_update_pdt.php" class=" w-50">
            <h1 style="color: rgb(38, 219, 107) !important;"
                class="jus d-flex justify-content-center align-items-center">ECOMP NFT's </h1>

            <h3 class="jus d-flex justify-content-center align-items-center text-white">UPDATE PRODUCTS</h3>
            <input name="pdt_id" readonly class="d-none form-control" value="<?php echo "$pdt_id"?>"><br>           

            <input name="name" class="form-control " placeholder="Product Name"><br>

            <textarea name="details" class="form-control" rows="5" placeholder="Products Details"></textarea><br>

            <input name="price" class="form-control" placeholder="Product Price"><br>

            <input name="imname" type="file" class="form-control"><br>

            <input type="submit" class="btn btn-success form-control">


        </form>
    </div>
    <style>
        .jus {
            background: rgb(131, 58, 180);
            background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);
        }


        body {
            background: rgb(36, 21, 0);
            background: linear-gradient(90deg, rgba(36, 21, 0, 1) 0%, rgba(102, 7, 94, 1) 19%, rgba(201, 60, 42, 1) 48%, rgba(255, 0, 177, 1) 71%, rgba(120, 9, 121, 1) 100%);
        }
    </style>

</body>

</html>