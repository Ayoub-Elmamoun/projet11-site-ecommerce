<?php

require '../manager/productManager.php';


if(isset($_GET)){

    $id = $_GET['id'];
    $productManger = new productManager();
    $data = $productManger->getProductById($id);
    
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>product</title>
</head>
<body>
<header>
        <nav class='container-fluid bg-dark text-white text-center'>
            <h1>e-commerce</h1>
        </nav>
    </header>
    <main>
    <main>
        <section class="container-fluid  text-center mt-5 d-flex flex-row justify-content-evenly">

        <?php foreach($data as $product){ ?>

                    <div class=" d-flex flex-column  align-item-center">
                        <form method="get" action="addToCart.php">

                            <img src="../asset/images/images.jpg" class="pic_a">
                            <h2><?php echo $product->getProductName(); ?></h2>
                            <h4><?php echo $product->getDetails() ?></h4>
                            <p><?php echo $product->getPrice() . " DH" ?></p>
                            <input type="hidden" value= "<?php echo $product->getId() ?>" name="id">
                            <input type="number" value ="1" name="quantity">
                            <input type="submit" class="btn btn-success"  value="add to cart">


                        </form>
                           
                            
                    </div>


                <?php } ?>
        </section>
    </main>
    </main>
</body>
</html>