<?php 
 // dectare private properties for prooduct class
 class produit {

    private $id;
    private $produitName;
    private $prix;
    private $description;



        // getters and setters for produit class

        public function setId($id){

            $this->id = $id;

        }

        public function getId(){

            return $this->id;

        }

        // getters and setters for produitname
        public function setproduitName($produitName){

            $this->produitName = $produitName;

        }

        public function getproduitName(){

            return $this->produitName;

        }

        // getters and setters for prix

        public function setprix($prix){

            $this->prix = $prix;

        }   

        public function getprix(){
            return $this->prix;
        }

        // getters and setters for description

        public function setdescription($description){

            $this->description = $description;
        }
    
        public function getdescription(){
    
            return $this->description;
        }



 }
 

?>