<?php
include_once 'DataBase.php';
class Class_ 
{
    private $name  ; 
    private $ID ;
    private $DB ; 
    
    public function __construct() 
    {
        $this->DB = new DataBase() ;
    }
    
    public function addClass($class)
    {
        
    }
    
    //setter functions
    public function setName($name)
    {
        $this->name = $name ;
    }
    public function setID($ID)
    {
        $this->ID = $ID ;
    }
    //getter functions
    public function getName()
    {
        return $this->name ;
    }
    public function getID()
    {
        return $this->ID ;
    }
}
