<?php
include_once 'Home.php'; 
?>
<?php
include_once '../models/parente.php';
$parent=new parente(); 
$result=$parent->invoices_s($id);
if(mysqli_num_rows($result)==0){
    echo 'not found';
}
  while ($row=mysqli_fetch_array($result)){
        
    $id_ss=$row['id_student'];
    $name=$row['name'];
    $num_of_current=$row['paid'];
    $num_of_expired=$row['rest'];
    $date=$row['total_paid'];
    $price=$row['date'];
  
  }
?>
<table border="1"  >
    <tr>
                                        <td>id_s</td>
					<td><?=$id_ss?> </td>
</tr>
                                        <tr> 
                                            <td >name</td>
					<td><?=$name?> </td>
				</tr>
                                <tr>
                                    <td>paid</td>
                                    <td><?=$num_of_current?> </td>
                                </tr>
                                <tr>
                                    <td>the rest</td>
                                    <td><?=$num_of_expired?> </td>
                                </tr>
                                <tr>
                                    <td>total paid</td>
                                    <td><?=$date?> </td>
                                </tr>
                                <tr>
                                    <td>date</td>
                                    <td><?=$price?> </td>
                                </tr>
                                <tr>
                                    <td>school_name</td>
                                    <td>الحج اسماعيل وشركاه</td>
                                </tr>
                                <tr>
                                    <td>school_manager</td>
                                    <td>اسماعيل ذات نفسة</td>
                                </tr>
</table>
</div>
</div>
<?php
include_once './footer.php';
?>