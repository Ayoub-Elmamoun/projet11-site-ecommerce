<?php
    require_once "categorieManager.php";

if(isset($_GET['id'])){
    $id = $_GET['id'] ;

    //
    $categoryManager = new categorieManager();
    $categoryManager->deleteCategorie($id);

    header('Location: index.php');
}
?>