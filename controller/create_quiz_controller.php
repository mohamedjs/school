<?php
include_once '../models/DataBase.php';
include_once '../models/quiz.php';
include_once '../models/Teacher.php';


$DB = new DataBase();
$quiz = new quiz() ;
$teacher = new Teacher() ;
echo $_COOKIE['user_id'];
$teacher->findbyID($_COOKIE['user_id']);
$quiz->CreateQuiz($teacher->geID(), $teacher->getSubject());

$query ="SELECT subject.name , fname FROM subject "
        . "join teacher on subject.code = teacher.subject_name "
        . "join users on users.id = teacher.id_teacher where users.username = '$_COOKIE[user]'";

$result = $DB->query($query);

$subject = mysqli_fetch_array($result);

session_start() ; 
$_SESSION['maker'] = $teacher->getFName() . " " . $teacher->getLName() ;
$_SESSION['subject'] = $subject[0] ; 
$_SESSION['quizID'] = $quiz->getID() ;


