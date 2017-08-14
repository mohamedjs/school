<?php
include_once 'Home.php';
?>
<!doctype html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<link rel="stylesheet" href="styleee_1.css">
<script type="js/maain_1.js"></script>

</head>
<body>
    <div id="content">
<h1 >Ajax File Upload </h1>
<form id="myForm" action="upload_2.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>id_class</td>
            <td> <input type="text" name="id_c"></td>
    </tr>
    <tr>
            <td>title</td>
            <td> <input type="text" name="title"></td>
    </tr>
    </table>
    <input type="file" size="60" name="myfile" >
     <input type="submit" value="Upload" id="submit">
 </form>
 
 
 <div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div >
</div>
<br/>
    
<div id="message"></div>
    </div>
</body>
</html>
<?php
include_once 'footer.php';
?>
