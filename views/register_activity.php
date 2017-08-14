<?php
include_once 'Home.php'; 
?>
<?php
include_once '../models/DataBase.php';
$DB= new DataBase();
$query=" SELECT * from activity order by id_a desc limit 1; ";
   $result = $DB->query($query);
?>
<?php
while ($row =  mysqli_fetch_array($result)){
        $y = $row['name'];
        $x= $row['id_a'];
        

    ?>
<h4 style="color:springgreen;margin-left: 300px;"> <?= $y ?></h5>
<?php }?>

<form action="../controller/r_a_controller.php" method="post" >
    
    <table border="0" style="color:springgreen;width: 220px;height: 300px;margin-left: 30%;" >
        <tr>
            <th colspan="3" style="color: firebrick"><h2 style="background-color: bisque;border-radius:5px ">Register Activity ^--^</h2></th>
            <td></td>
            <td></td>
        </tr>
          <tr>
              <th style="color: blue" >ID_activity:</th>
              <td><input type="text" name="_id" value="<?=$x?>"/></td>
            <td></td>
        </tr>
          <tr>
            <th style="color:darkorange" >Name:</th>
            <td><input type="text" name="_name"></td>
            <td></td>
        </tr>
        <tr>
            <th style="color: yellow" >Level:</th>
            <td><input type="text" name="_level"></td>
                
                </select></td>
            <td></td>
        </tr>
        <tr>
            <th style="color:greenyellow" >Email:</th>
            <td><input type="text" name="_email" /></td>
            <td></td>
        </tr>
            
        <tr>
            <th>Phone:</th>
            <td><input type="text" name="_phone" /></td>
            <td></td>
        </tr>
        
        <tr>
            <th></th>
            <td><input type="submit" name="_submit"value=" Register " /></td>
            <td></td>
        </tr>
        
        
    </table>
    
    
    
</form>
</div>
</div>
<?php
include_once './footer.php';
?>