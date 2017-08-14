<?php
include_once '../views/Home.php';
?>
<?php
include_once  '../models/Admin.php';
include_once  '../models/Trip.php';
     
     $trip=new Trip();
     $admin=new Admin();

    $title =$_POST['title'];
    $ID =$_POST['ID'];
    $name =$_POST['name'];
    $date =$_POST['date'];
    $price =$_POST['price'];
      
    
     $trip->settitle($title);
     $trip->setID($ID);
     $trip->setname($name);
     $trip->setdate($date);
     $trip->setprice($price);
     
     $admin->addTrip($trip);
     
     echo '<h1> add trip successful  ^__^</h1>';
?>
</div>
</div>
<?php
include_once '../views/footer.php';
?>