<?php
include_once '../models/DataBase.php';
class quiz {
    private $id ; 
    private $subjectid ;
    private $day ; 
    private $month ; 
    private $year ; 
    private $maker ; 
    private $availableTime ; 
    private $validTo ; 
    private $postTime ;
    private $DB ;
    
    public function __construct() {
        $this->DB = new DataBase() ;
    }
    public function CreateQuiz($teachID , $subjectid){
        $this->setsubjectName($subjectid) ;
        $this->setDay() ; 
        $this->setMonth() ; 
        $this->setYear() ;
        $this->setMaker($teachID);
        $query = "insert into quize (`subject_id` , `day` , `month` , `year` , `maker`) values ($this->subjectid , $this->day , $this->month , $this->year , $this->maker)";
        $this->DB->query($query);
        
        $this->findByID($this->getLastId());
    }
    public function setID($id) {
        $this->id = $id ; 
    }
    public function setSubjectName($subjectid) {
        $this->subjectid = $subjectid; 
        
    }
    public function setDay() {
        $this->day = date("j");
    }
    public function setMonth() {
        $this->month = date("n");
    }
    public function setYear() {
        $this->year = date("Y") ;
    }
    public function setAvailableTime($daysNum) {
        $this->availableTime = $daysNum ;
    }
    public function setMaker($teachID) {
        $this->maker = $teachID ;
    }
    public function setValidTo() {
        $this->validTo = $this->postTime+($this->availableTime * 24*60*60);
    }
    public function setPostTime()
    {
        $this->postTime = time() ;
    }
    
    //getters functions
    public function getID(){
        return $this->id ;
    }
    public function getSubjecrName(){
        $this->subjectName ; 
    }
    public function getDay(){
        return $this->day ;
    }
    public function getMonth(){
        return $this->month ;
    }
    public function getYear(){
        return $this->year ;
    }
    public function getMaker(){
        return $this->maker ;
    }
    public function getValidTo(){
        return $this->validTo ;
    }
    public function getAvailableTime(){
        return $this->availableTime ;
    }
    public function getPostTime()
    {
        return $this->postTime ;
    }
    public function findByID($id)
    {
        $query = "select * from quize where id =$id" ;
        $result = $this->DB->query($query);
        $row = mysqli_fetch_row($result);
        $this->id = $row[0] ;
        $this->subjectName = $row[1] ; 
        $this->day = $row[2] ;
        $this->month = $row[3] ; 
        $this->year = $row[4] ;
        $this->maker = $row[5] ;
        $this->postTime = $row[6] ;
        $this->availableTime = $row[7] ;
        $this->validTo = $row[8] ;
    }
    
    public function getLastId()
    {
        $query = "select max(id) from quize" ;
        $result = $this->DB->query($query);
        $row = mysqli_fetch_row($result);
        
        return $row[0] ;
    }
}


