<?php 

require '../config/config.php';
require '../entities/produit.php';


// function to get all produits

function getAllProduits(){
    $db = new dataBase();
    $connect = $db->connectDb();
    $produits = array();
    $query = "SELECT * FROM produits";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($result)){
        $produit = new produit();
        $produit->setId($row['id']);
        $produit->setproduitName($row['produitName']);
        $produit->setprix($row['prix']);
        $produit->setdescription($row['description']);
        array_push($produits, $produit);
    }
    return $produits;
}


// function to get a product by id
function getProductById($id){
    $db = new dataBase();
    $connect = $db->connectDb();
    $query = "SELECT * FROM produit WHERE id = $id";
    $result = mysqli_query($connect, $query);
    $product = new produit();
    while ($row = mysqli_fetch_assoc($result)) {
        $product->setId($row['id']);
        $product->setproduitName($row['nom']);
        $product->setprix($row['prix']);
        $product->setdescription($row['description']);
    }
    return $product;
}


?>