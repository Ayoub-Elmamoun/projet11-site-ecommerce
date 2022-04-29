<?php

class product_class
{

    public $product_name;
    public $product_price;
}

$product = new product_class();

$product->product_name = "Apple";
$product_name = $product->product_name;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><? echo $product_name;?> </h1>
</body>

</html>