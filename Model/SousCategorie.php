<?php

/**
 * Created by PhpStorm.
 * User: Aslamin
 * Date: 23/03/2017
 * Time: 22:35
 */
class SousCategorie{

    private $id;
    private $nom;
    private $idCategorie;

    function __construct($nomCategorie, $aIdCategorie){

        $this->nom         = $nomCategorie;
        $this->idCategorie = $aIdCategorie;
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

    public function getCategorieId(){
        return $this->idCategorie;
    }

    public function setCategorieId($aIdCategorie){
        $this->idCategorie = $aIdCategorie;
    }
}