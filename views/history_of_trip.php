<?php
include_once 'Home.php'; 
include_once '../models/Admin.php';
$admin=new Admin();
$result=$admin->history_of_trips();
      ?>


      <table border="2" style= "background-color:aliceblue ; " >
      <thead>
        <tr>
          <th>id_student</th>
          <th>id_t</th>
          <th>name_student</th>
          <th>address</th>
          <th>phone</th>
            <th>id_c</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td>{$row['id_student']}</td>
              <td>{$row['id_t']}</td>
              <td>{$row['name_student']}</td>
              <td>{$row['address']}</td>
              <td>{$row['phone']}</td>
              <td>{$row['id_c']}</td>
              
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


