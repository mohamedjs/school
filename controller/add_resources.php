<?php
include_once '../views/Home.php';
include_once '../models/Admin.php';
include_once '../models/Recourses.php';
?>
<?php
//retrieve data from the form in the design
$admin=new Admin();
$db=new DataBase();
$resources=new Recources();
$submit  =$_POST['submit'];
$id      =$_POST['id'];
$name    =$_POST['name'];
$current =$_POST['current_number'];
$expired =$_POST['expired_number'];
$date    =$_POST['date'];
$price   =$_POST['price'];
//check if the user fill all fields or no
if($submit)
{ 
if($name)
{
//check if name of resource exist or not 
$query1 ="SELECT * FROM RESOURCES WHERE name='$name'";
$result=$db->query(query1);
$row=mysqli_num_rows($result);
if(row!=0)
{
    echo "this name is already exist";

}//
else {
 $resources->setID($id);
 $resources->setName($name);
 $resources->setCurrent($current);
 $resources->setexperid($expired);
 $resources->setprice($price);
 $resources->setdate($date);
 $admin->addRecource($resources);
 echo "data added successfully";
}//if
}
else
    echo 'fill data';
}
?>
<?php
include_once '../views/footer.php';
?>