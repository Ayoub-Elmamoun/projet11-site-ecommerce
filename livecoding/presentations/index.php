<?php
require '../manager/productManager.php';
$productManager = new productManager ();

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <header>
        <nav class='container bg-dark text-white d-flex flex-row justify-content-evenly'>
            <h1>e-commerce</h1>
            <div class ="align-items-center d-flex">
            <a href="cart.php" class =" text-decoration-none">cart</a>
            </div>
        </nav>
    </header>
        <div class="product">
            <p class ="text-center product-shild">OUR PRODUCTS</p>
        </div>
        <hr>

    <section>

    </section>
    <main>
        <section class="container  text-center mt-5 d-flex flex-row justify-content-evenly">
        
        <?php 
        
        foreach($data as $product){ ?>

                    <div class=" d-flex flex-column  align-item-center">
                        <img src="../asset/images/images.jpg" class ="pic_a">
                        <h2><?php echo $product->getProductName(); ?></h2>
                        <h4><?php echo $product->getDetails() ?></h4>
                        <p><?php echo $product->getPrice() . " DH" ?></p>
                        <a class=" text-center  d-block" href="details.php?id=<?php echo $product->getId()?> ">
                        <button class="btn btn-success" >details</button></a>
                    </div>

                <?php } ?>
        </section>
    </main>
</body>
</html>