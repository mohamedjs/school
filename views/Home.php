<?php
session_start();
include_once '../models/DataBase.php';
include_once  '../models/Admin.php';
function checUserkLogin()
{
    if(isset($_COOKIE['user']) && !empty ($_COOKIE['user']))
        return $_COOKIE['user'];
    else
        return false;
}
$DB = new DataBase();
$MSG = "" ;
$admin=new Admin();


if(isset($_POST['submit']))
{
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $DB->query($query);
                                      
     if(empty($username) || empty($password))
    {
        $MSG = " please enter username/password firstly" ;
    }
    else
    {
        while ($row= mysqli_fetch_array($result)){
            $usern=$row['username'];
            $id_type=$row['id_type'];
            $_SESSION['username']=$user;
            $_SESSION['id_type']=$id_type;
            $_SESSION['id']=$id;
        }
        
        if(mysqli_num_rows($result) == 1 )
        {
            if(isset($_POST['remember']))
                setcookie ('user',$username , time ()+60*60*24*365);
            else
                setcookie ('user',$username);
               header("location: Home.php");
         
        }
        else 
            $MSG = "username/password not valid please try again \n";
    }
}
?>
<html >
    <link rel="stylesheet" href="../style/Hoome.css">
	<div class="head">
		<h3> English school... </h3>
		
		

			<ul>
				<li style=background-color:#00cc00;><a href="Home.html" >Home</a></li>
				<li style=background-color:pink><a href="ِAbout Us.html">About Us</a></li>
				<li style=background-color:orange><a href="Events.html">Events</a></li>
				<li style=background-color:purple><a href="History.html">History</a></li>
				<li style=background-color:yellow><a href="Contact.html">Contact</a></li>
			</ul>
                <?php
                if(checUserkLogin()==false)
                {
                    
                $loginform =    "<form action='login.php' method='post'>
		<table class='login'>
                   
                 <tr>
					<td>Username</td>
					<td><input type='text' name='username'   ></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type='text' name='password'  ></td>
				</tr>
				<tr>
					<td><input type='checkbox' name='remember' ></td>
					<td >Remember me!</td>
				</tr>
				<tr>
					<td colspan='2' ><input type='submit' name='submit' value='LogIn'></td>
                
				</tr>
                                <tr>
                                <td>";
                $loginform.=$MSG;
                                $loginform.= "</td> </tr></table> </form>" ;
                
                echo $loginform;
                }
                else{
                echo '<div align="right"> welcome '.$_COOKIE["user"].' <a href="logout.php" >(LOG OUT)</a> </div>';
             
                }
                ?>
                

		
	</div>
      <div class="center">
			<div class="left">
                            <?php
                            include_once '../models/Admin.php';
                            $admin=new Admin();
                            $id_type=$_SESSION['id_type'];
                            $id =$_SESSION['id'];
                            $res= $admin->url($id_type);
                             while($row =  mysqli_fetch_array($res)){
                                echo'<li align="center"><a href="'.$row['path'].'">'.$row['title'].'</a></li>';
                            
                            
                             }
                            ?>
                            
                        </div>
      <div class="right">