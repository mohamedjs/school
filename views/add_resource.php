<?php
include_once 'Home.php'; 
?>
<form action="../controller/add_resources.php" method="post">
<label> resource id </label>
<input type= "text" name="id">
</br>
<label> name </label>
<input type= "text" name="name">
</br>
<label> current_number </label>
<input type= "text" name="current_number">
</br>
<label> expired_number </label>
<input type= "text" name="expired_number">
</br>
<label> date</label>
<input type= "text" name="date">
</br>
<label>price </label>
<input type= "text" name="price">
</br>
<input type= "submit" name="submit" value="add">

</form>
<?php
include_once 'footer.php';
?>