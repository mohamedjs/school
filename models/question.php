<?php

include_once '../models/DataBase.php';

class question {
    private $id ; 
    private $Question  ;
    private $DB ;
    
    public function __construct() {
        $this->DB = new DataBase() ;
    }
    
    public function getId()
    {
        return $this->id; 
    }
    public function setQuestion($question)
    {
        $this->Question = $question ;
    }
    
    public function getQuestion()
    {
        return $this->Question ; 
    }
    
    public function saveQuestion($quizID , $question , $answer , $correctAns)
    {
        $iscorrect="" ;
        $query = "insert into quistions (quistion) values ('$question')"; // this is okay
        echo $query;
        $this->DB->query($query); // this is okay
        $lastID = $this->getLastID() ;// this is okay
        
        $query_qize_content = "INSERT INTO `quize_content`(`id_quize`, `id_quistion`) VALUES ($quizID,$lastID)" ;
        $this->DB->query($query_qize_content);
        echo "<br>".$query_qize_content;
        for($count = 0 ;$count <4 ; $count++)
        {
            if($answer[$count] == $correctAns)
                 $iscorrect = 1;
            else $iscorrect = 0;
            
            $query_ans = "INSERT INTO `answers`(`answer`) VALUES ('$answer[$count]')";
            $this->DB->query($query_ans);
            echo "<br>".$query_ans;
            echo $lastAnsID = $this->getAnswerLastID();
            echo $query_question_ans = "INSERT INTO `quistions_answer`(`id_quistion`, `id_answer`, `correct_answer`) VALUES ($lastID,$lastAnsID,$iscorrect)" ;
            $this->DB->query($query_question_ans);
            
        }
    }
    private function getLastID()
    {
        $query = "select max(id) from quistions";
        $result = $this->DB->query($query);
        $row = mysqli_fetch_array($result);
        return $row[0] ;
    }
    private function getAnswerLastID()
    {
        $query = "select max(id) from answers";
        $result = $this->DB->query($query);
        $row = mysqli_fetch_array($result);
        return $row[0] ;
    }
    
}
