<?php
include_once 'Home.php'; 
?>
<table class="Desc">
    <form action="../controller/add_class_controller.php" method="post" >
                 <tr>
					<td>Class ID</td>
					<td><input type="text" name="id_c" required><br></td>
                                     
				</tr>
                                <tr>
                                    <td>Class name</td>
					<td><input type="text" name="name" required></td>
                                </tr>	
                                
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="add"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
            </form>
           
        </table>
</div>
</div>
<?php
include_once './footer.php';
?>
