<?php

include_once 'DataBase.php';
include_once 'person.php';
class Parente extends Person
{
    private $DB ;
    private $job ;
    public function __construct() 
    {
        parent::__construct();
        $this->DB= new DataBase() ;
    }
     public function setjop($job)
    {
        $this->job = $job;
    }
     public function getjob()
    {
        return $this->job;
    }
    public function viewEmail()
    {
        
    }
     public function invoices_s($id_parent)
    {
        $query_s_fees="select student_fees.* from student_fees
                       join student on student_fees.id_student=student.id_student where id_parent='$id_parent'";
        return $this->DB->query($query_s_fees);
    }
}
