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
<form method="post" action="display_discount.php">
    <div class="class1">
        <h1>Calculate Discount</h1>
        <label>Product description:</label>
        <input class="input" name="product" type="text" size="30" placeholder="your's product"><br>
        <label>List Price:</label>
        <input class="input" name="price" type="text" size="30" placeholder="Produc's price" ><br>
        <label>Discount Percent:</label>
        <input class="input" name="percent" type="text" size="30" placeholder="Discount percent" ><br>
        <input class="input" type="submit" size="30" value="calculation" ><br>
    </div>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $amount = $_POST["inventmentAmount"];
    $interestRate = $_POST["interestRate"];
    $year = $_POST["year"];
    $calculation = $amount + $amount*$interestRate;
    echo $calculation;
}
?>
