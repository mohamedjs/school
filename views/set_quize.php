<?php
include_once '../controller/create_quiz_controller.php';
header("location: newQuize.php?maker=$_SESSION[maker]&subject=$_SESSION[subject]&quizID=$_SESSION[quizID]");


