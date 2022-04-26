<?php 
 // dectare private properties for prooduct class

 private $id;
 private $productName;
 private $price;
 private $details;



    // getters and setters for product class

    public function setId($id){

        $this->id = $id;

    };

    public function getId(){

        return $this->id;

    };

    // getters and setters for productname
    public function setProductName($productName){

        $this->productName = $productName;

    };

    public function getProductName(){

        return $this->productName;

    };

    // getters and setters for price

    public function setPrice($price){

        $this->price = $price;

    }   

    public function getPrice(){
        return $this->price;
    }

    // getters and setters for details

    public function getDetails(){

        return $this->details;

    }

    public function setDetails(){

        $this->details = $details

    }



?>