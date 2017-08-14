<?php
include_once '../views/Home.php';
?>
<?php
include_once '../models/Activity.php';
include_once  '../models/student.php';
$student=new student();
$activity=new Activity();
$name=$_POST['_name'];
$id_aa=$_POST['_id'];
$level=$_POST['_level'];
$phone=$_POST['_phone'];
$email=$_POST['_email'];
//register activity
$student->register_Activity($id,$id_aa,$name,$level,$email,$phone);
echo "<h1>Thanks For Registration ^--^</h1>";

?>
</div>
</div>
<?php
include_once '../views/footer.php';
?>