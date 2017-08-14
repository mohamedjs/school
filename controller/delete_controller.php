<?php
include_once '../models/DataBase.php';
if(isset($_GET['table']))
{
    $DB = new DataBase();
    $query = "DELETE FROM $_GET[table] WHERE $_GET[pk] = $_GET[pkval]";
    echo $query ;
    echo $DB->query($query);
    echo $_GET['page'];
    #header("location: $_GET[page]");
}
else
    echo 'error';