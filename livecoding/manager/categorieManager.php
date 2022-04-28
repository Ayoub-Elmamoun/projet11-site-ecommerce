


<?php 
include '../entities/product.php';
require "../config/config.php";


class categorieManager {



    public function getProduitCategorieName($categorie){

        $configDB = new dataBase();
        $dataBase = $configDB->connectDB();
        $selectedProduct = "SELECT * FROM `products` INNER JOIN categories ON idCategory = id_categorie where nom_categorie ='$categorie'";
        $query = mysqli_query($dataBase , $selectedProduct);
        $result = mysqli_fetch_all($query , MYSQLI_ASSOC);

        $productById = array();

        foreach($result as $product){

            $fetchedProduct = new product();
            $fetchedProduct->setId($product['id']);
            $fetchedProduct->setProductName($product['productName']);
            $fetchedProduct->setDetails($product['description']);
            $fetchedProduct->setPrice($product['price']);
            $fetchedProduct->setcategorie_name($product['nom_categorie']);   
            $fetchedProduct->setId_Categorie($product['id_categorie']);   
            array_push($productById,  $fetchedProduct);
            

        }

        return $productById;


    }




    public function getProduitCategorie(){

        $configDB = new dataBase();
        $dataBase = $configDB->connectDB();
        $selectedProduct = "SELECT * FROM `products` INNER JOIN categories ON idCategory = id_categorie ";
        $query = mysqli_query($dataBase , $selectedProduct);
        $result = mysqli_fetch_all($query , MYSQLI_ASSOC);

        $productById = array();

        foreach($result as $product){

            $fetchedProduct = new product();
            $fetchedProduct->setId($product['id']);
            $fetchedProduct->setProductName($product['productName']);
            $fetchedProduct->setDetails($product['description']);
            $fetchedProduct->setPrice($product['price']);
            $fetchedProduct->setcategorie_name($product['nom_categorie']);   
            $fetchedProduct->setId_Categorie($product['id_categorie']);   
            array_push($productById,  $fetchedProduct);
            

        }

        return $productById;


    }



}
?>