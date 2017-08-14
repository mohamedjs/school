<?php
include_once 'DataBase.php';
include_once      'User.php';
include_once      'IviewTimeTable.php';
class Person extends User implements IviewTimeTable
{
    private $DB ; //referance of Data Base object  
    public function __construct() {
        parent::__construct();
        $this->DB = new DataBase() ;
    }
    public function viewTimetable() {
        
    }
    
    public function viewGrade()
    {
        
    }
    
    public function viewTranscript()
    {
        
    }

}
