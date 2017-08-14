<?php
include_once '../views/Home.php';
?>
<?php
include_once  '../models/Teacher.php';
include_once  '../models/Admin.php';
$teacher=new Teacher();
$admin=new Admin();

  $fname    = $_POST['f_name'];
  $id       = $_POST['ID'] ;
  $address  = $_POST['address'] ;
  $lname    = $_POST['l_name'] ;
  $geneder  = $_POST['gender'] ;
  $email    = $_POST['useremail'] ;
  $DOB      = $_POST['DOB'] ;
  $password = $_POST['pass'] ;
  $phone    = $_POST['phone'] ;
  $subject  = $_POST['subject'] ;
  $id_type  = $_POST['id_type'] ;
  $salary   = $_POST['salary'] ;
  $code     = $_POST['S_code'] ;
  $id_c     = $_POST['id_c'] ;
  $bouns    =$_POST['bouns'];
  $username =$_POST['username'];
     //set teacher
     $teacher->setDOB($DOB);
     $teacher->setEmail($email);
     $teacher->setFName($fname);
     $teacher->setLName($lname);
     $teacher->setID($id);
     $teacher->setPassword($password);
     $teacher->setPhone($phone);
     $teacher->setUserName($username);
     $teacher->setaddress($address);
     $teacher->setgeneder($geneder);
     $teacher->setidtype($id_type);
     $teacher->setSalary($salary);
     $teacher->setSubject($subject);
     $teacher->setidclass($id_c);
     $teacher->setcode($code);
     $teacher->setbouns($bouns);
     //add teacher
     $admin->addTeacher($teacher);
     echo '<h1 color="red">Add teacher successed ^___^<h1>';
     ?>
</div>
</div>
<?php
include_once '../views/footer.php';
?>