<!DOCTYPE html>
<?php
include_once 'Home.php';
if(isset($_POST['submit']))
{
$to=$_POST['to'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$from="mohamedjimmy2510@gmail.com";
$header="from:".$from;


    $mail=mail($to, $subject, $message,$header);
    echo "E-mail  will be send Successed ^--^";
    
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background: firebrick">
        <form action="email.php"method="post">
            <p>to:</p> <input type="text"name="to">
            <p>subject:</p> <input type="text"name="subject">
            <p>message:</p><textarea name="message"cols="40"rows="10" placeholder="write your Message"></textarea>
            <p>
            <input type="submit" name="submit"value="send">
            </p>
        </form>
    </body>
</html>
<?php
include_once 'footer.php';
?>