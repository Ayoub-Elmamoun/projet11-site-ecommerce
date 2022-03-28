<?php 
 include "produit.php";


 // get connection to database
 class GestionProduit {
     public $name ;
     private $Connection = Null;
     private function getConnection()
     {
         $this->Connection = mysqli_connect('localhost', 'admin', 'admin', 'site-e-commerce');
         if (!$this->Connection) {
             die('Could not connect to database server');
         }
         return $this->Connection; 
    }
    
     
 

?>