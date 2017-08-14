<?php
include_once 'Home.php'; 
include_once '../models/Admin.php';
$admin=new Admin();
$result=$admin->history_of_activity();
      ?>

      <table border="2" style= "background-color:aliceblue ; " >
      <thead>
        <tr>
          <th>id_student</th>
          <th>name</th>
          <th>id_level</th>
          <th>eamil</th>
          <th>phone</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td>{$row['id_student']}</td>
              <td>{$row['name']}</td>
              <td>{$row['id_level']}</td>
              <td>{$row['eamil']}</td>
              <td>{$row['phone']}</td>
              
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
</div>
</div>
     <?php
include 'footer.php';
?>


