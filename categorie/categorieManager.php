<?php
include 'categorie.php';

class categorieManager
{

    private $Connection = null;

    private function getConnection()
    {
        if (is_null($this->Connection)) {
            $this->Connection = mysqli_connect('localhost', 'admin', 'admin', 'site-ecommerce');

            if (!$this->Connection) {
                $message = 'Connection Error: ' . mysqli_connect_error();
                throw new Exception($message);
            }
        }
        return $this->Connection;
    }

    public function getAllCategories()
    {
        $sql = 'SELECT * FROM categorie';
        $result = mysqli_query($this->getConnection(), $sql);
        $categorieList = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $categories = array();

        foreach ($categorieList as $categorie_list) {
            $categorie = new categorie();
            $categorie->setId($categorie_list['id']);
            $categorie->setCategorieName($categorie_list['categorieName']);
            $categorie->setCategorie_description($categorie_list['categorie_description']);
            array_push($categories, $categorie);
        }

       return $categories;

    
    }

    public function insertCategorie($categorie){

        $categorieName = $categorie->getCategorieName();
        $categorie_description = $categorie->getCategorie_description();

        $sqlInsertQuety = "INSERT INTO categorie (categorieName,categorie_description) VALUES ('$categorieName', '$categorie_description')";
        mysqli_query($this->getConnection(), $sqlInsertQuety);
    }

    public function deleteCategorie($id){
        $deleteRow = "DELETE FROM categorie WHERE id= '$id'";
        mysqli_query($this->getConnection(), $deleteRow);
    }

    public function updateCategorie($id){

        $SelectRowId = "SELECT * FROM categorie WHERE id= $id";
        $result = mysqli_query($this->getConnection(),  $SelectRowId);

        $categorie_list = mysqli_fetch_assoc($result);
        $categorie = new categorie();
        $categorie->setId($categorie_list['id']);
        $categorie->setCategorieName($categorie_list['categorieName']);
        $categorie->setCategorie_description($categorie_list['categorie_description']);
        return $categorie;
    }

}