
<?php
include_once './Home.php';
include_once '../models/DataBase.php';
include_once '../models/question.php';
        $question ="" ;
        $answer = array();
        $questionobj = new question() ;
if(isset($_POST['add'])){
        
    if(empty($_POST['question'])){
        echo 'Please Enter the question firstly !!!';
    }
    elseif (empty ($_POST['anwser1'])||empty ($_POST['answer2'])||empty ($_POST['anwser3'])||empty ($_POST['anwser4'])) {
        echo 'please fill all answer !';
    }
    elseif (empty ($_POST['correctAnswer'])) {
        echo 'please chooc the correct answer !';
    }
    else {
        $question = $_POST['question'] ;
  
        $answer[] = $_POST['anwser1'] ;
        $answer[] = $_POST['answer2'] ;
        $answer[] = $_POST['anwser3'] ;
        $answer[] = $_POST['anwser4'] ;
        
        
        $correctAns = $answer[$_POST['correctAnswer']];
        $questionobj->saveQuestion($_SESSION['quizID'], $question, $answer, $correctAns) ;
        
}

    
}
if(isset($_POST['submit']))
{
    echo "quize is added " ;
    //session_unset($_SESSION['quizID']) ;
    //session_destroy($_SESSION['quizID']) ;
    #header("location: index.php");
}
?>
<form action="newQuize.php" method="post">
                subject  : <?=$_SESSION['subject'] ?> &nbsp;&nbsp;&nbsp;  
                quiz id  : <?=$_SESSION['quizID']?>
                teacher  : <?= $_SESSION['maker']?>
                <hr>
    <table>
        
            <tr>
            <td>
                question 
            </td>
            <td colspan="3">
            <textarea cols="40" rows="1" name="question" placeholder="write your question"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="">
                <h3>Answers :-</h3>
            </td>
            <td>
                correct
            </td>
            <td>
                
            </td>
            <td>
                correct
            </td>
        </tr>
        <tr>
            <td>
                1 - <input name="anwser1" type="text"  /> 
            </td>
            <td>
                <input type="radio" name="correctAnswer" value="0" />
            </td>
             <td>
                2 - <input name="answer2" type="text"  /> 
            </td>
            <td>
                <input type="radio" name="correctAnswer" value="1" />
            </td>
        </tr>
        <tr>
            <td>
                3 - <input name="anwser3" type="text" /> 
            </td>
            <td>
                <input type="radio" name="correctAnswer" value="2" />
            </td>
             <td>
                4 - <input name="anwser4" type="text" /> 
            </td>
            <td>
                <input type="radio" name="correctAnswer" value="3" />
            </td>
        </tr>
        <tr>
            <td align="right">
                <input name="add" type="submit" value=" Add " />
            </td>
            <td>
                <input name="submit" type="submit" value=" Submit " />
            </td>
        </tr>
    </table>
</form>

<?php
include_once './footer.php';
?>
