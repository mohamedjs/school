<?php

//you may need to include databse file hera

class User {
    protected $fname ;
    protected $lname ;
    protected $phone ; 
    protected $adress ; 
    protected $username ; 
    protected $password ; 
    protected $id ; 
    protected $email ;
    protected $DOB;
    protected $id_type;
    protected $geneder;
            function __construct() {
        ;
    }
    //class 's functions
    public function  logIn($logedObj) // lgoedOgj :object from the person that is loged in now 
    {
        
    }
    function logOut()
    {
        
    }


    //setter functions , use it to set data in properts 
    public  function setidtype($id_type)
    {
        $this->id_type = $id_type ;
    }
    function setFName($fname)
    {
        $this->fname = $fname ;
    }
    function setPhone($phone)
    {
        $this->phone = $phone ;
    }
    function setaddress($address)
    {
        $this->adress = $address ;
    }
    function setUserName($username)
    {
        $this->username = $username ;
    }
    function setPassword($password)
    {
        $this->password = $password ;
    }
    function setID($id)
    {
        $this->id = $id ;
    }
    function setEmail($email)
    {
        $this->email = $email ; 
    }
     function setDOB($DOB)
    {
        $this->DOB = $DOB ; 
    }
     function setgeneder($geneder)
    {
        $this->geneder = $geneder ; 
    }
     function setLName($lname)
    {
        $this->lname = $lname ; 
    }
    //getter functions to get values of properts
    function getFName()
    {
        return $this->fname  ; 
    }
    function getPhone()
    {
        return $this->phone ; 
    }
    function getAddress()
    {
        return $this->adress ; 
    }
    function getUserName()
    {
        return $this->username ;
    }
    function geID()
    {
        return $this->id ;
    }
    function getPassword()
    {
        return $this->password ;
    }
    function getEmail()
    {
        return $this->email ;
    }
    function getgeneder()
    {
        return $this->geneder ;
    }
    function getLName()
    {
        return $this->lname ;
    }
    function getDOB()
    {
        return $this->DOB ;
    }
    function getidtype()
    {
        return $this->id_type ;
    }
    }
