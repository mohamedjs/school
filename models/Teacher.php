<?php
include_once 'DataBase.php';
include_once  'Staff.php';
class Teacher extends Staff
{
    private $DB ;//referance of data base class you must need to do your operations
    private $subject ;
    private $id_c;
    private $code;// hold subject that is teacher study it 
    public function __construct() {
        parent::__construct();
        $this->DB = new DataBase(); 
    }
    
    
    //teacher functions 
    public function uploadGreades()
    {
        
    }
    public function uploadAssignment()
    {
        
    }
    public function setQuize()
    {
        
    }
    public function viewTimeTable()
    {
        
    }
    public function sendEmail()
    {
        
    }
    public function creatReport($report) // $report is object from report type
    {
        
    }

    //setter functions
    public function setSubject($sunject)
    {
        $this->subject = $sunject ;
    }
     public function setcode($code)
    {
        $this->code = $code ;
    }
     public function setidclass($id_c)
    {
        $this->id_c = $id_c ;
    }
    //getter functions 
    public function getSubject()
    {
        return $this->subject ;
    }
    public function getidclass()
    {
        return $this->id_c ;
    }
    public function getcode()
    {
        return $this->code ;
    }

  public function search($updateOk="", $deleteOk="" , $editpage="" , $deleteconroller="" , $returnpage="") {
        return $this->DB->searchGrid( "SELECT id ,fname , lname , phone , address , geneder , DOB , username , password ,"
                . " id_type , approve , eamil ,`code`,`id_c` ,`subject_name`,`salary` , bonus  "
                . "FROM teacher inner join `users`  on users.id = teacher.id_teacher inner join staff "
                . "on staff.id_staff = teacher.id_teacher",
                                           $updateOk, $deleteOk, $editpage, $deleteconroller, $returnpage ,"users" , "id");
    }
    
    public function findbyID($id)
    {
        //$query = "select * from users inner join student on users.id = student.id_student where users.id = $id" ; 
        $query = " SELECT id ,fname , lname , phone , address , geneder , DOB , username , password ,"
                . " id_type , approve , eamil ,`code`,`id_c` ,`subject_name`,`salary` , bonus  "
                . "FROM teacher inner join `users`  on users.id = teacher.id_teacher inner join staff "
                . "on staff.id_staff = teacher.id_teacher where users.id = $id" ;
        
        $result = $this->DB->query($query);
        $row = mysqli_fetch_array($result);
        $this->id = $row[0] ;
        $this->fname = $row[1] ;
        $this->lname = $row[2] ;
        $this->phone = $row[3] ;
        $this->adress = $row[4] ;
        $this->geneder = $row[5] ;
        $this->DOB = $row[6] ;
        $this->username = $row[7] ;
        $this->password = $row[8] ;
        $this->id_type = $row[9] ;
        $this->approve = $row[10] ;
        $this->email = $row[11] ;
        $this->code = $row[12] ;
        $this->id_c = $row[13] ;
        $this->subject = $row[14] ;
        $this->salary = $row[15] ;
        $this->bouns = $row[16] ;
        
        
    }

}
