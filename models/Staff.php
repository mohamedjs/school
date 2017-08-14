<?php
include_once 'User.php';
include_once 'DataBase.php';
class Staff extends User
{
    protected $salary ;
    protected $bouns;
    public function __construct() 
    {
        parent::__construct();
       
    }
    
    //setter functions
    function setSalary($salary)
    {
        $this->salary=$salary ;
    }
     function setbouns($bouns)
    {
        $this->bouns=$bouns ;
    }
    
    //getter functions
    function getSalary()
    {
        return $this->salary ; 
    }
    function getbouns()
    {
        return $this->bouns ; 
    } 
}
