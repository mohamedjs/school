<?php
include_once      'DataBase.php';
include_once      'person.php';
class student extends Person
{
    private $DB ;
    private $id_level ;
    private $father_name;
    private $mother_name;
    private $fees;
    private $id_c;
    private $id_parent;


    public function __construct()
    {
        parent::__construct();
        $this->DB = new DataBase() ;
    }
    //set student
     function setidlevel($id_level)
    {
        $this->id_level = $id_level ;
    }
     function setfathername($father_name)
    {
        $this->father_name = $father_name ;
    }
     function setmothername($mother_name)
    {
        $this->mother_name = $mother_name ;
    }
     function setidclass($id_c)
    {
        $this->id_c = $id_c ;
    }
    
     function setfees($fees)
    {
        $this->fees = $fees ;
    }
     function setidparent($id_parent)
    {
        $this->id_parent = $id_parent ;
    }
    //get student
     function getfathername()
    {
        return $this->father_name ; 
    }
     function getmothername()
    {
        return $this->mother_name ; 
    }
     function getidparent()
    {
        return $this->id_parent ; 
    }
     function getidlevel()
    {
        return $this->id_level ; 
    }
     function getidclass()
    {
        return $this->id_c ; 
    }
     function getfees()
    {
        return $this->fees ; 
    }
    public function solveQuize($Quize) // i don't belie in this paramerter  
    {
        
    }
    //register activity
   public function register_Activity($id_s,$id_a,$name,$level,$email,$phone) // $activityID is variable contains of ID of avtivity 
    {
        $query_r_activity="insert into register_activity values ($id_s,$id_a,'$name',$level,
                                                                 '$email','$phone')";
        $this->DB->query($query_r_activity);
    }
     
    public function reserve_trip($id,$id_t,$name,$address,$phone,$id_c) // $student is an Object from type student 
    {
        $query=
        $this->DB->query("insert into reserve_trip values ($id,$id_t,'$name','$address','$phone',$id_c)");    
    }
    
     public function updateStudent($id , $fname , $lname , $address , $geneder , $email , $DOB , $password , $phone , $id_level , $id_type , /*$father_name ,*/ $id_c , $mother_name , $username , $fees /*, $id_parent*/) // $student is an Object from type student
    {/*
        $fname      = $this->fname;
        $lname      =  $this->lname;
        $phone      =  $this->phone; 
        $adress     =  $this->adress; 
        $username   =  $this->username; 
        $password   =  $this->password; 
        $id         =  $this->id ; 
        $email      =  $this->email;
        $DOB        =  $this->DOB;
        $id_type    =  $this->id_type;
        $geneder    =  $this->geneder;
        $id_parent  =  $this->id_parent;
        $id_level   =  $this->id_level;
        $id_c       =  $this->id_c;
        $fees       =  $this->fees;
        $father_name=  $this->father_name;
        $mother_name=  $this->mother_name;*/

       // $query_users = "update users set  fname='$fname' , lname = '$lname',address ='$address'  where id = $id";
        $query_users = "update users set  fname='$fname' , lname = '$lname',address ='$address'   where id = $id";
        echo $query_users;
     //  $query_users   = " update users set  fname='$fname' , lname = '$lname',"
       // ."phone='$phone',address ='$address',geneder ='$geneder', DOB = '$DOB',"
       // ."username = '$username' , password = '$password',id_type = '$id_type', eamil = '$email' where id = $id ";
     //  $query_student="INSERT INTO student VALUE($id,'$father_name','$mother_name',$id_level,$id_c,$id_parent,$fees)";
     //  $query_s_fees="INSERT INTO student_fees VALUE($id,'$fname','0','0','0','0/0/0','$id_level')";
        $this->DB->query($query_users);
        mysqli_affected_rows($this->DB->getconnection());
       $this->findbyID($id);
       
       //$this->DB->query($query_student);
       //$this->DB->query($query_s_fees);
    }
    
    public function deleteStudent($studentID) // $studentID is an variable comtaians of ID of student you want to delete it
    {
        
    }

    public function search($updateOk="", $deleteOk="" , $editpage="" , $deleteconroller="" , $returnpage="") 
    {
        return $this->DB->searchGrid("select * from users inner join student on users.id = student.id_student ",
                                           $updateOk, $deleteOk, $editpage, $deleteconroller, $returnpage ,"users" , "id");
        
    }
    public function findbyID($id)
    {
        //$query = "select * from users inner join student on users.id = student.id_student where users.id = $id" ; 
        $query = "SELECT id ,fname , lname , phone , address , geneder , DOB , username , password , id_type , approve , eamil , fathername , mothername , id_level , id_c , id_parent , fees FROM student inner join `users`  on users.id = student.id_student where users.id = $id " ;
       // echo $query."\n" ;
        $result = $this->DB->query($query);
        $row = mysqli_fetch_array($result);
        $this->id = $row[0] ;
        $this->fname = $row[1] ;
        $this->lname = $row[2] ;
        $this->phone = $row[3] ;
        $this->adress = $row[4] ;
        $this->geneder = $row[5] ;
        $this->DOB = $row[6] ;
        $this->username = $row[7] ;
        $this->password = $row[8] ;
        $this->id_type = $row[9] ;
        $this->approve = $row[10] ;
        $this->email = $row[11] ;
        $this->father_name= $row[12] ;
        $this->mother_name = $row[13] ;
        $this->id_level = $row[14] ;
        $this->id_parent = $row[15] ;
        $this->fees = $row[16] ;
        
        //echo $this->fees ;        echo $this->geneder;        echo $this->adress;
        
    }

}

