<?php

/**
 * Created by PhpStorm.
 * User: Aslamin
 * Date: 23/03/2017
 * Time: 22:35
 */
class Categorie{

    private $id;
    private $nom;

    function __construct($nomCategorie){

        $this->nom = $nomCategorie;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nomCategorie){
        $this->nom = $nomCategorie;
    }

}