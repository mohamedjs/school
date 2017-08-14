<?php
include_once 'Home.php'; 
include_once '../models/Admin.php';
$admin=new Admin();
$result=$admin->Report_of_sfees(1);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <table style="width: 35%;" border="1">
     <tr>
                      <td>id_student</td>
                      <td>name</td>
                      <td>paid</td>
                      <td>rest</td>
                      <td>total paid</td>
                      <td>date</td>
                
  
    </tr> 
    <?php
    while ($row=mysqli_fetch_array($result)){
        
    $id_r=$row['id_student'];
    $name=$row['name'];
    $num_of_current=$row['paid'];
    $num_of_expired=$row['rest'];
    $date=$row['total_paid'];
    $price=$row['date'];
    
    ?>
    <tr>
        <td><input name="id_s"       value="<?=$id_r?>"></td>
        <td><input name="name"       value="<?=$name?>"> </td>
        <td><input name="paid"       value="<?=$num_of_current?>"> </td>
        <td><input name="rest"       value="<?=$num_of_expired?>"> </td>
        <td><input name="total_paid" value="<?=$date?>"> </td>
        <td><input name="date"       value="<?=$price?>"> </td>
        <td><a href="update_s_fees.php"> <input type="submit" name="update" value="update"></a></td>
    </tr>    
    <?php
    }
    ?>
        </table>
            
    </body>
</html>
</div>
</div>
<?php
include_once './footer.php';
?>
