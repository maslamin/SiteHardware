<?php

/**
 * Created by PhpStorm.
 * User: Aslamin
 * Date: 23/03/2017
 * Time: 22:33
 */
class User{
    private $id;
    private $login;
    private $password;
    private $nom;
    private $prenom;

    public function __construct($aLogin, $aPassword, $aNom, $aPrenom){

        $this->login    = $aLogin;
        $this->password = $aPassword;
        $this->nom      = $aNom;
        $this->aPrenom  = $aPrenom;
    }

    public function getId(){
        return $this->id;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($aLogin){
        $this->login = $aLogin;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($aPassword){
        $this->password = $aPassword;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($aNom){
        $this->nom = $aNom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($aPrenom){
        $this->prenom = $aPrenom;
    }


}