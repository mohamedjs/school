<?php
include_once 'Home.php';
include_once '../models/Admin.php';
$admin=new Admin();
$output_dir = "uploads/";
$id_t=$_POST['id_t'];
$title=$_POST['title'];
if(isset($_FILES["myfile"]))
{
    $path=$_FILES["myfile"]["name"];
	//Filter the file types , if you want.
	if ($_FILES["myfile"]["error"] > 0)
	{ 
	  echo "Error: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		//move the uploaded file to uploads folder;
    	move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $_FILES["myfile"]["name"]);
    
   	 echo "Success!File Uploaded :".$_FILES["myfile"]["name"];
	}
        $admin->upload_timetableT($id_t, $title, $path);
}
?>