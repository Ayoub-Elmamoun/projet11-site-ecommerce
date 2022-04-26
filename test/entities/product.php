<?php

 class product {

    private $id;
    private $productName;
    private $price;
    private $details;

    // geters and seters for the id

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    // geters and seters for productName

    public function getProductName (){
        return $this->ProductName;
    }
    public function setProductName ($productName) {
        $this->productName = $productName;
    }

    // geters and seters for price 

    public function getPrice (){
        return $this->price;
    }
    public function setPrice($price){
        $this->setPrice =$price ;
    }

    // geters and seters for details 

    public function getDetails(){
        return $this->details;
    }
    public function setDetails($details){
        $this->details = $details;
    }    


 }


?>