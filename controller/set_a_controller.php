<?php
include_once '../views/Home.php';
?>

<?php
include_once '../models/Activity.php';
include_once '../models/Admin.php';
$admin=new Admin();
$activity=new Activity();
$name=$_POST['AddActivity'];
$activity->setName($name);
$admin->addActivity($activity);
echo'<h1>Activity added ^--^</h1>';
?>
<?php
include_once '../views/footer.php';
?>