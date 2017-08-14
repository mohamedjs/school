<?php
include_once 'DataBase.php';

    class Trip 
{
    private $title ;
    private $ID;
    private $name;
    private $date;
    private $price;
    private $DB ; 
    
     public function __construct() 
    {
        $this->DB = new DataBase() ;
    }
    
    
     public function settitle($title)
    {
        $this->title = $title ;
    }
    public function setID($ID)
    {
        $this->ID = $ID ;
    }
   public function setname($name)
    {
        $this->name = $name ;
    }
    public function setdate($date)
    {
        $this->date = $date ;
    }
    public function setprice($price)
    {
       $this->price = $price ;
    }
    
    //get :(
    
    public function gettitle()
    {
        return $this->title ;
    }
    public function getID()
    {
        return $this->ID ;
    }
    public function getname()
    {
        return $this->name ;
    }
    public function getdate()
    {
        return $this->date ;
    }
    public function getprice()
    {
        return $this->price ;
    }
    
    
}