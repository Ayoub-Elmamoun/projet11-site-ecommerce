<?php
include "../manager/categorieManager.php";

$categorie ='face-care';
$Manager = new categorieManager();

$data = $Manager-> getProduitCategorieName($categorie);



foreach($data as $value){
  
    
    print_r($value);
    
}
?>