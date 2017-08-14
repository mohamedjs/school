<?php
include_once 'Home.php'; 
?>
<table>
    <form action="../controller/add_s_controller.php" method="post" >
                                <tr>
                                         <td> <h1>parent</h1></td>
                                </tr>
                                <tr>
                                        <td>ID</td>
					<td><input type="text" name="id_parent" required></td>
					<td>F_Name</td>
					<td><input type="text" name="f_name_p" required><br></td>
                                        
				</tr>
                                <tr>
                                    <td>L-name</td>
                                    <td><input name="l_name_p" type="text" ></td>
                                    <td>Gender</td>
                                    <td><input name="gender_p" type="text"></td>
                                </tr>
                                <tr>
                                    <td>birth data</td>
                                    <td><input name="DOB_p" type="date"></td>
                                    <td>id_type</td>
                                    <td><input name="id_type_p" type="text"></td>
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
                               
   
				
                                <tr>
                                    <td> <h1>student</h1></td>
                                </tr>

   
                                <tr>
                                        <td>ID</td>
					<td><input type="text" name="ID" required></td>
					<td>F_Name</td>
					<td><input type="text" name="f_name" required><br></td>
                                        
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
					<td><input  type="email" name="usremail" required></td>
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
                                    <td>id_level</td>
                                    <td><input name="id_level" type="text"></td>
                                    <td>username</td>
                                    <td><input name="username" type="text"></td>
                                </tr>
                                 <tr>
                                    <td>id_c</td>
                                    <td><input name="id_c" type="text"></td>
                                    <td>fees</td>
                                    <td><input name="fees" type="text"></td>
                                </tr>
                                <tr>
                                    <td> mother_name</td>
                                    <td><input name="mother_name" type="text"></td>
                                    
                                </tr>
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
