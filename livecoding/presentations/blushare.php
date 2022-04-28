








 <?php
include "../manager/categorieManager.php";

$categorie ='blushare';
$Manager = new categorieManager();

$data = $Manager-> getProduitCategorieName($categorie);



foreach($data as $value){
  
    
    print_r($value);
    
}
?>