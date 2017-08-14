<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Subject
 *
 * @author Smart1
 */
class Subject {
    private $ID ; 
    private $subjectName ;
    private $totalGrade ;
    private $passGrade ; // that is arry of quizes 
    private $DB ; 
    
    public function __construct() 
    {
        // hena naqes ta3ref el array of qizes
        $this->DB = new DataBase() ;
        
    }
    //set subject
    function setid($ID)
    {
        $this->ID=$ID ;
    }
    function setsubjectname($subjectName)
    {
        $this->subjectName=$subjectName ;
    }
    function settotalGrade($totalGrade)
    {
        $this->totalGrade=$totalGrade ;
    }
    function setpassGrade($passGrade)
    {
        $this->passGrade=$passGrade ;
    }
    //get subject
    function getID()
    {
        return $this->ID ; 
    }
    function getsubjectName()
    {
        return $this->subjectName ; 
    }
    function getpassGrade()
    {
        return $this->passGrade ; 
    }
    function gettotalGrade()
    {
        return $this->totalGrade ; 
    }
}
