<?php
include_once 'Home.php'; 
?>
<table>
    <form action="../controller/add_t_controller.php" method="post" >
                 <tr>
					<td>F_Name</td>
					<td><input type="text" name="f_name" required><br></td>
                                        <td>ID</td>
					<td><input type="text" name="ID" required></td>
				</tr>
                                <tr>
                                    <td>L-name</td>
                                    <td><input name="l_name" type="text" ></td>
                                    <td>Gender</td>
                                    <td><input name="gender" type="text"></td>
                                </tr>
                                <tr>
                                    <td>birth data</td>
                                    <td><input name="DOB" type="date"></td>
                                    <td>id_type</td>
                                    <td><input name="id_type" type="text"></td>
                                </tr>
				<tr>
					<td>E-mail</td>
					<td><input  type="text" name="useremail" required></td>
                    <td>Address</td>
					<td><input  type="text" name="address" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td ><input type="password" name="pass" required></td>
                    <td>phone</td>
					<td ><input type="text" name="phone" required></td>
				</tr>
                                <tr>
                                    <td>Subject code</td>
                                    <td><input name="S_code" type="text"></td>
                                    <td>username</td>
                                    <td><input name="username" type="text"></td>
                                </tr>
                                 <tr>
                                    <td>id_c</td>
                                    <td><input name="id_c" type="text"></td>
                                    
                                </tr>
                                 <tr>
                                    <td>bouns</td>
                                    <td><input name="bouns" type="text"></td>
                                    
                                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input type="text" name="salary" required></td>
					<td>Subject</td>
                                        <td ><select name="subject">
  <option value="Arabic">Arabic</option>
  <option value="English">English</option>
  <option value="math">math</option>
  <option value="science">science</option>
</select></td>
                    <td></td>
                    <td></td>
                    
                    
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
include_once 'footer.php';
?>
