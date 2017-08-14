<?php
include_once './Home.php';
include_once '../models/Teacher.php';
#include_once '../controller/delete_controller.php';
#include_once './update_student.php';
$teacher = new Teacher() ; 


 echo $teacher->search(true , true , "./update_teacher_form.php" , "../controller/delete_controller.php" , "./update_student.php");
 ?>
<?php
 include_once './footer.php';
?>