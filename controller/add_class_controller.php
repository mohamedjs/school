<?php
include_once '../views/Home.php';
?>
<?php
include_once  '../models/Admin.php';
include_once  '../models/Classl.php';
     
     $class=new Classl();
     $admin=new Admin();

    $id_c =$_POST['id_c'];
    $name =$_POST['name'];
      
    
     $class->setid_c($id_c);
     $class->setname($name);
     
     
     $admin->addClassl($class);
     
     echo '<h1> add class successful  ^__^</h1>';
?>
</div>
</div>
<?php
include_once '../views/footer.php';
?>