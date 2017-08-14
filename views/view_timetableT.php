<?php
include_once 'Home.php';
include_once '../models/Admin.php';
$admin=new Admin();
$result=$admin->view_timetableT($id);
while ($row =  mysqli_fetch_array($result)){
    $title=$row['title'];
    $path=$row['path'];
}
?>
<label> <?=$title?></label>
<br>
<a href="/EnglishSchool/views/uploads/<?=$path?>">download </a>

<?php
include_once 'footer.php';
?>
