<?php
class categorie
{

    private $id;
    private $categorieName;
    private $categorie_description;


    public function getId()
    {
        return $this->id;
    }
    public function setId($value)
    {
        $this->id = $value;
    }

    public function getCategorieName()
    {
        return $this->categorieName;
    }

    public function setCategorieName($value)
    {
        $this->categorieName = $value;
    }

    public function getCategorie_description()
    {
        return $this->categorie_description;
    }

    public function setCategorie_description($value)
    {
        $this->categorie_description = $value;
    }



}
