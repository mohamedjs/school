<?php
include_once 'Home.php'; 
?>
<table class="Desc">
    <form action="../controller/trip_Description_controller.php" method="post" >
                 <tr>
					<td>Title</td>
					<td><input type="text" name="title" required><br></td>
                                     
				</tr>
                                <tr>
                                    <td>ID</td>
					<td><input type="text" name="ID" required></td>
                                </tr>
                               <tr>
                                    <td>Name</td>
					<td><textarea name="name"cols="30"rows="15"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Date</td>
					<td><input type="text" name="date" required></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
					<td><input type="text" name="price" required></td>
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
