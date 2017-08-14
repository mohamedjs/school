<?php
include_once './Home.php'; 
include_once '../models/Teacher.php';
include_once '../models/Admin.php';
$teacher = new Teacher() ;
$pkval = "" ;
if(isset($_GET['pkval']))
{
    $teacher->findbyID($_GET['pkval']);
    $pkval = $_GET['pkval'] ;
    echo $pkval;
}
if(isset($_POST['update']))
{
    $admin=new Admin();

  $fname    = $_POST['f_name'];
  $id       = $_POST['Id_teacher'] ;
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
     $admin->updateTeacher($teacher);
}


?>
<form action="update_teacher_form.php" method="post" >
        <input name="Id_teacher" type="hidden" value="<?=$pkval?>">
        <table>

                 <tr>
					<td>F_Name</td>
                                        <td><input type="text" name="f_name" required value="<?=$teacher->getFName()?>"><br></td>
                                        
				</tr>
                                <tr>
                                    <td>L-name</td>
                                    <td><input name="l_name" type="text" value="<?=$teacher->getLName()?>" ></td>
                                    <td>Gender</td>
                                    <td><input name="gender" type="text" value="<?=$teacher->getgeneder()?>"></td>
                                </tr>
                                <tr>
                                    <td>birth data</td>
                                    <td><input name="DOB" type="date" value="<?=$teacher->getDOB()?>"></td>
                                    <td>id_type</td>
                                    <td><input name="id_type" type="text" value="<?=$teacher->getidtype()?>"></td>
                                </tr>
				<tr>
					<td>E-mail</td>
                                        <td><input  type="text" name="useremail" required value="<?=$teacher->getEmail()?>"></td>
                    <td>Address</td>
                    <td><input  type="text" name="address" required value="<?=$teacher->getAddress()?>"></td>
				</tr>
				<tr>
					<td>Password</td>
                                        <td ><input type="password" name="pass" required value="<?=$teacher->getPassword()?>"></td>
                    <td>phone</td>
                    <td ><input type="text" name="phone" required value="<?=$teacher->getPhone()?>"></td>
				</tr>
                                <tr>
                                    <td>Subject code</td>
                                    <td><input name="S_code" type="text" value="<?=$teacher->getSubject()?>"></td>
                                    <td>username</td>
                                    <td><input name="username" type="text" value="<?=$teacher->getUserName()?>"></td>
                                </tr>
                                 <tr>
                                    <td>id_c</td>
                                    <td><input name="id_c" type="text" value="<?=$teacher->getidclass()?>"></td>
                                    
                                </tr>
                                 <tr>
                                    <td>bouns</td>
                                    <td><input name="bouns" type="text" value="<?=$teacher->getbouns()?>"></td>
                                    
                                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input type="text" name="salary" required value="<?=$teacher->getSalary()?>"></td>
					<td>Subject</td>
                                        <td >
                                            <select name="subject" >
                                                <option value="Arabic">Arabic</option>
                                                <option value="English">English</option>
                                                <option value="math">math</option>
                                                <option value="science">science</option>
                                            </select>
                                        </td>
                    <td></td>
                    <td></td>
                    
                    
				</tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="update" value=" UpDate "></td>
                                    <td></td>
                                    <td></td>
                                </tr>
        </table>
    </form>
           
        
<?php
include_once './footer.php';
?>
