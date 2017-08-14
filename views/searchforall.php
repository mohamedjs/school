<?php
include_once './Home.php';
include_once '../models/DataBase.php';
$field = "" ;
$key = "" ;
$type = "" ;
$msg = "" ;
$DB = new DataBase() ;
if(isset($_POST['search']))
{
    $field = $_POST['field'] ;
    $type = $_POST['type'] ;
    $key = $_POST['key'] ; 
    switch ($type) {
        case 1:
            $query = "SELECT * FROM `users` INNER JOIN teacher ON users.id = teacher.id_teacher where users.$field LIKE '%$key%' ";
           $msg = $DB->searchGrid($query);
            break;
        case 2:
            $query = "SELECT * FROM `users` INNER JOIN student ON users.id = student.id_student where users.$field LIKE '%$key%' ";
           $msg = $DB->searchGrid($query);
            break;
        case 3:
            if($field == "id")
            {
                $query = "select * from resource where id_r like '%$key%'" ;
                $msg = $DB->searchGrid($query);
            }
            else if($field == "fname")
            {
                $query = "select * from resource where name like '%$key%'" ;
                $msg = $DB->searchGrid($query);
            }
            break;
        case 4:
            if($field == "id")
            {
                $query = "select * from trips where id_t like '%$key%'";
                $msg = $DB->searchGrid($query);
            }
            else if($field = "fname")
            {
                $query = "select * from trips where name like '%$key%'";
                $msg = $DB->searchGrid($query);
            }
            break;
        default:
            break;
    }
    
}
?>
<form method="post" action="searchforall.php" >
   
    
     
    <table>
        <tr>
            <td>
                <p align="center"><h1>Search For </h1></p>
            </td>
        </tr>
        <tr>
            <td>
                <select name="type">
                    <option value="1">teacher</option>
                    <option value="2">student</option>
                    <option value="3">resources</option>
                    <option value="4">trip</option>
                </select>
            
                <input name="field" type="radio" value="id" checked="true" >id
                <input name="field" type="radio" value="fname" />name 
            </td>
       </tr>
       <tr>
           <td>
               Value To Search
               <input name="key" type="text" value="<?=$key?>" />
               <input name="search" type="submit" value="  Search  " />
           </td>
       </tr>
       <tr>
           <td>
               <?=$msg?>
           </td>
       </tr>
    </table>
</form>
<?php
include_once './footer.php';
?>