<?php
include "../manager/categorieManager.php";

$categorie ='blushare';
$Manager = new categorieManager();

$data = $Manager-> getProduitCategorieName($categorie);

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

<section class="container  text-center mt-5 d-flex flex-row justify-content-evenly">

<?php foreach($data as $value){ ?>

    <?php } ?>

</section>
</body>
</html>







