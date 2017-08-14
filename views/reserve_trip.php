<?php
include_once 'Home.php'; 
include_once '../models/DataBase.php';
include_once '../models/student.php';
$DB= new DataBase();
$student=new student();
$msg=" ";
$x="";
$y="";
?>
<?php
 $query="SELECT * from  trips order by id_t desc limit 1 ";
   $result = $DB->query($query);
while ($row = mysqli_fetch_array($result)){
        $y = $row['name'];
        $x= $row['id_t']
    ?>
<h1 style="color:red"><?=$y?></h1>
<?php }?>
<?php
if (isset($_POST['submit']))
{  
      $student->reserve_trip($_POST['ID'],$x,$_POST['name'],$_POST['address']
                             ,$_POST['phone_num'],$_POST['id_c']);  
      $msg="thans for reserve trip";
}
  
 
   ?>


<form action="trip_form.php" method="post" >
    <?= $msg ?>
    <table border="0" style="color:springgreen" >
        <tr>
            <th colspan="3" style="color: firebrick"><h2>Register for a trip</h2></th>
            <td></td>
            <td></td>
        </tr>
          <tr>
              <th style="color: blue" >ID:</th>
              <td><input type="text" name="ID" required/></td>
            <td></td>
        </tr>
        <tr>
            <th>Name:</th>
            <td><input type="text" name="name" /></td>
            <td></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><input type="text" name="address" /></td>
            <td></td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td><input type="text" name="phone_num" /></td>
            <td></td>
        </tr>
        
        <tr>
            <th>Class :</th>
            <td><input type="text" name="id_c" /></td>
            <td></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="submit"value=" Register " /></td>
            <td></td>
        </tr>
        
    </table>
    
</form>
</div>
</div>
<?php
include_once './footer.php';
?>