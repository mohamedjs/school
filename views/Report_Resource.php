<?php
include_once 'Home.php'; 
?>
<?php
include_once '../models/Admin.php';
$admin=new Admin();
$result=$admin->createReport_of_Resource();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <table style="width: 50%" border="1">
     <tr>
                      <td>id</td>
                      <td>name</td>
                      <td>num_of_current</td>
                      <td>num_of_expired</td>
                      <td>date</td>
                      <td>price</td>
                
  
    </tr> 
    <?php
    while ($row=mysqli_fetch_array($result)){
        
    $id_r=$row['id_r'];
    $name=$row['name'];
    $num_of_current=$row['num_of_current'];
    $num_of_expired=$row['num_of_expired'];
    $date=$row['date'];
    $price=$row['price'];
    
    ?>
    <tr>
        <td><?=$id_r?> </td>
         <td><?=$name?> </td>
          <td><?=$num_of_current?> </td>
           <td><?=$num_of_expired?> </td>
            <td><?=$date?> </td>
             <td><?=$price?> </td>
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
