<?php  
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
            $idu=$row['id'];
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
?>