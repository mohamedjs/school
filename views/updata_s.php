<?php
include_once 'Home.php';
?>
<?php
/*
$link = mysqli_connect("localhost", "root", "", "phplogin") ; 
$result = mysqli_query($link, "select * from users") ;
$obj = mysqli_fetch_field_direct($result, 1);
echo $obj->name ;
echo $obj->orgtable ;
      */  

include_once '../models/DataBase.php';
include_once '../models/student.php';

$DB = new DataBase() ;
#echo $DB->searchGrid("select * from users" , true ,true , "" , "../controller/delete_controller.php" , "") ;
$student = new student();
echo $student->search(true , true, "./update_student.php","../controller/delete_controller.php" , "") ;
?>
<?php
include_once 'footer.php';
?>









