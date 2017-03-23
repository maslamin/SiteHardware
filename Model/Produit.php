<?php

/**
 * Created by PhpStorm.
 * User: Aslamin
 * Date: 23/03/2017
 * Time: 22:35
 */
class Produit{

    private $id;
    private $nom;
    private $idSousCategorie;
    private $description;
    private $prix;

    function __construct($nomCategorie, $aIdSousCategorie, $description, $prix){

        $this->nom             = $nomCategorie;
        $this->idSousCategorie = $aIdSousCategorie;
        $this->description     = $description;
        $this->prix            = $prix;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getSousCategorieId(){
        return $this->idSousCategorie;
    }

    public function setSousCategorieId($aIdSousCategorie){
        $this->idSousCategorie = $aIdSousCategorie;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function setPrix($prix){
        $this->prix = $prix;
    }
}