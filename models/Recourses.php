<?php

include_once 'DataBase.php';
class Recources 
{
    private $ID ;
    private $name ;
    private $experid ; 
    private $current ;
    private $date ;
    private $price;
    public function __construct() {
        ;
    }
    
   
    //setter functions
    public function setID($ID)
    {
        $this->ID = $ID ; 
    }
    
    public function setName($name)
    {
        $this->name = $name ; 
    }
    public function setexperid($experid)
    {
        $this->experid = $experid ; 
    }
    public function setCurrent($current)
    {
        $this->current = $current;
    }
     public function setprice($price)
    {
        $this->price = $price;
    }
     public function setdate($date)
    {
        $this->date = $date;
    }
    //getter functions
    public function getID()
    {
        return $this->ID ;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getExperid()
    {
        return $this->experid;
    }
    public function getCurrnt()
    {
        return $this->current ; 
    }
    public function getDate()
    {
        return $this->date ;
    }
       public function getprice()
    {
        return $this->price ;
    }      
}
