<?php
include_once 'Home.php'; 
?>

<form action="../controller/set_a_controller.php" method="post">
    
    <table style="margin-left:30%;margin-top:100px;"> 
        <tr>
            
            <th style="background-color: springgreen;border-radius: 50%; ">Add Activity</th>
            <td style="background-color: red "><textarea name="AddActivity" cols="60"rows="9"></textarea></td>
            
        </tr>
        <tr>
            <td><input type="submit"name="submit" value="Ok"></td>
           
        </tr>
    </table>
    
</form>
<?php
include_once 'footer.php';
?>





