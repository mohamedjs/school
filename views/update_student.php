<?php
include_once './Home.php'; 
include_once '../models/student.php';
$pkval = "" ;
$student = new student();
if(isset($_GET['pkval']))
{
    $student->findbyID($_GET['pkval']);
    $pkval = $_GET['pkval'] ; 
}

if(isset($_POST['update']))
    {
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
        //$father_name= $_POST['f_name_p'] ;
        $id_c     = $_POST['id_c'] ;
        $mother_name=$_POST['mother_name'];
        $username =$_POST['username'];
        $fees     =$_POST['fees'];
        //$id_parent=$_POST['id_parent'];
         $student->updateStudent($id , $fname, $lname , $address  , $geneder , $email , $DOB , $password , $phone , $id_level , $id_type , /*$father_name ,*/ $id_c , $mother_name , $username , $fees/* , $id_parent*/) ;
        //$student->updateStudent($id, $fname,$lname,$address);
        $pkval = $_POST['_id_student'] ; 
        //set student in class
        /*$student->setDOB($DOB);
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
        $student->setFName($fname);*/
        //$student->updateStudent() ;
        

       
    }
?>
<table>
    <form action="update_student.php" method="post" >
        
        <input type="hidden" name="_id_student" value="<?=$pkval?>" />
        
                     <!--           <tr>
                                         <td> <h1>parent</h1></td>
                                </tr>
                                <tr>
                                        <td>ID</td>
                                        <td><input type="text" name="id_parent" required ></td>
					<td>F_Name</td>
                                        <td><input type="text" name="f_name_p" required ><br></td>
                                        
				</tr>
                                <tr>
                                    <td>L-name</td>
                                    <td><input name="l_name_p" type="text"  ></td>
                                    <td>Gender</td>
                                    <td><input name="gender_p" type="text"></td>
                                </tr>
                                <tr>
                                    <td>birth data</td>
                                    <td><input name="text" type="date" value=""></td>
                                    <td>id_type</td>
                                    <td><input name="id_type_p" type="text" ></td>
                                </tr>
				<tr>
					<td>E-mail</td>
					<td><input  type="email" name="usremail_p" required></td>
                                         <td>Address</td>
					<td><input  type="text" name="address_p" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td ><input type="password" name="pass_p" required></td>
                                        <td>phone</td>
					<td ><input type="text" name="phone_p" required></td>
				</tr>
                                <tr>
                                    <td>job</td>
                                    <td><input name="job" type="text"></td>
                                    <td>username</td>
                                    <td><input name="username_p" type="text"></td>
                                </tr>
                               
   
			-->	
                                <tr>
                                    <td> <h1>student</h1></td>
                                </tr>

   
                                <tr>
                                        <td>ID</td>
					<td><input type="text" name="ID" required value="<?=$student->geID()?>"></td>
					<td>F_Name</td>
					<td><input type="text" name="f_name" required value="<?=$student->getFName()?>"><br></td>
                                        
				</tr>
                                <tr>
                                    <td>L-name</td>
                                    <td><input name="l_name" type="text" value="<?=$student->getLName()?>"></td>
                                    <td>Gender</td>
                                    <td><input name="gender" type="text" value="<?=$student->getgeneder()?>"></td>
                                </tr>
                                <tr>
                                    <td>birth data</td>
                                    <td><input name="DOB" type="date" value="<?=$student->getDOB()?>"></td>
                                    <td>id_type</td>
                                    <td><input name="id_type" type="text" value="<?=$student->getidtype()?>"></td>
                                </tr>
				<tr>
					<td>E-mail</td>
                                        <td><input  type="email" name="usremail" required value="<?=$student->getEmail()?>"></td>
                                         <td>Address</td>
                                         <td><input  type="text" name="address" required value="<?=$student->getEmail()?>"></td>
				</tr>
				<tr>
					<td>Password</td>
                                        <td ><input type="text" name="pass" required value="<?=$student->getPassword()?>"></td>
                                        <td>phone</td>
                                        <td ><input type="text" name="phone" required value="<?=$student->getPhone()?>"></td>
				</tr>
                                <tr>
                                    <td>id_level</td>
                                    <td><input name="id_level" type="text" value="<?=$student->getidlevel()?>"></td>
                                    <td>username</td>
                                    <td><input name="username" type="text" value="<?=$student->getUserName()?>"></td>
                                </tr>
                                 <tr>
                                    <td>id_c</td>
                                    <td><input name="id_c" type="text" value="<?=$student->getidclass()?>"></td>
                                    <td>fees</td>
                                    <td><input name="fees" type="text" value="<?=$student->getfees()?>"></td>
                                </tr>
                                <tr>
                                    <td> mother_name</td>
                                    <td><input name="mother_name" type="text" value="<?=$student->getmothername()?>"></td>
                                    
                                </tr>
                                    <td></td>
                                    <td><input type="submit" name="update"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
				
            </form>
           
        </table>

<?php
include_once './footer.php';
?>





