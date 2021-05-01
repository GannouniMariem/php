<?php

class Users{

    public $id;
    public $name;
    private $password;
    public $status;
    public function __construct(){}

    public function setPassword($password){
        
        $this->password = $password;
    }

    public function getPassword(){
        
        return $this->password;
    }

    public function affiche(){

        echo $this->name;
    }

    

    





}



?>