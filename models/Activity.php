<?php
include_once 'DataBase.php';
class Activity 
{
   
    private $ID ;
    private $name;
    private $DB ; 
    
    public function __construct() 
    {
        $this->DB = new DataBase() ;
    }
    
   
    
    //setter functions
    public function setName($name)
    {
        $this->name = $name ;
        echo 'ana tmam';
    }
  
    //getter functions
    public function getName()
    {
        return $this->name ;
    }
   
}
