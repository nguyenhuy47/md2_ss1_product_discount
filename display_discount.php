<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .class1{
            border: 1px;
            margin: 0px;
            padding: 10px;

        }
        .input{
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $product = $_POST["product"];
    $price = $_POST["price"];
    $percent = $_POST["percent"];
    $discountAmount = $price*$percent/100;
    $discountPricce = $price - $discountAmount;
}

?>

<form >
    <div class="class1">
        <h1>Product Discount Calculator</h1>
    <label>Product description:</label>
       <?php echo $product;?><br>
        <label>List Price:</label>
        <?php  echo $price; ?><br>
        <label>Discount Percent:</label>
        <?php echo $percent; ?><br>
        <label>Discount Amount:</label>
        <?php  echo $discountAmount; ?><br>
        <label>Discount Price:</label>
        <?php  echo $discountPricce; ?><br>
    </div>
</form>
</body>
</html>


