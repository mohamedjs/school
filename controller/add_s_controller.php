<?php
include_once '../views/Home.php';
?>
<?php
include_once  '../models/student.php';
include_once  '../models/Admin.php';
include_once '../models/parente.php';
$student=new student();
$admin=new Admin();
$parent=new Parente();
  $fname    = $_POST['f_name'];
  $id       = $_POST['ID'] ;
  $address  = $_POST['address'] ;
  $lname    = $_POST['l_name'] ;
  $geneder   = $_POST['gender'] ;
  $email    = $_POST['usremail'] ;
  $DOB      = $_POST['DOB'] ;
  $password = $_POST['pass'] ;
  $phone    = $_POST['phone'] ;
  $id_level  = $_POST['id_level'] ;
  $id_type  = $_POST['id_type'] ;
  $father_name= $_POST['f_name_p'] ;
  $id_c     = $_POST['id_c'] ;
  $mother_name=$_POST['mother_name'];
  $username =$_POST['username'];
  $fees     =$_POST['fees'];
  $id_parent=$_POST['id_parent'];
     //set parente
  $fname_p    = $_POST['f_name_p'];
  $id_parente  = $_POST['id_parent'] ;
  $address_p  = $_POST['address_p'] ;
  $lname_p    = $_POST['l_name_p'] ;
  $geneder_p   = $_POST['gender_p'] ;
  $email_p    = $_POST['usremail_p'] ;
  $DOB_p      = $_POST['DOB_p'] ;
  $password_p = $_POST['pass_p'] ;
  $phone_p    = $_POST['phone_p'] ;
  $job  = $_POST['job'] ;
  $id_type_p  = $_POST['id_type_p'] ;
  $username_p =$_POST['username_p'];
  //set parent
  $parent->setDOB($DOB_p);
  $parent->setEmail($email_p);
  $parent->setFName($fname_p);
  $parent->setPhone($phone_p);
  $parent->setLName($lname_p);
  $parent->setUserName($username_p);
  $parent->setidtype($id_type_p);
  $parent->setjop($job);
  $parent->setPassword($password_p);
  $parent->setID($id_parente);
  $parent->setgeneder($geneder_p);
  $parent->setaddress($address_p);
   //set student
  $student->setDOB($DOB);
  $student->setEmail($email);
  $student->setID($id);
  $student->setLName($lname);
  $student->setPassword($password);
  $student->setPhone($phone);
  $student->setUserName($username);
  $student->setfathername($father_name);
  $student->setaddress($address);
  $student->setfees($fees);
  $student->setidclass($id_c);
  $student->setidparent($id_parent);
  $student->setmothername($mother_name);
  $student->setidtype($id_type);
  $student->setgeneder($geneder);
  $student->setidlevel($id_level);
  $student->setFName($fname);
     //add student
     $admin->addStudent($student);
     //add parent
     $admin->addparent($parent);
     echo '<h1> add studnt successed ^___^ </h1>';
     ?>
</div>
</div>
<?php
include_once '../views/footer.php';
?>