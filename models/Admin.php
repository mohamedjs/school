<?php
include_once    'DataBase.php';
include_once     'Teacher.php';
include_once     'Staff.php';
include_once     'Recourses.php';
class Admin extends Staff {
    private $DB ; //referance of data base class you must need to do your operations
    function __construct() 
    {
        
        $this->DB = new DataBase();
        
    }
   
    public function upload_timetableT($id_t,$title,$path){
        $query = "INSERT INTO upload_timetablet VALUES ( $id_t, '$title','$path')";
        $this->DB->query($query);
    }
    public function view_timetableT($id_t){
        $query = "select * from upload_timetablet where id_teacher=$id_t";
        return $this->DB->query($query);
    }
    public function upload_timetableS($id_c,$title,$path){
        $query = "INSERT INTO upload_timetables VALUES ( $id_c, '$title','$path')";
        $this->DB->query($query);
    }
 public function view_timetableS($id){
        $query = "select upload_timetables.* from upload_timetables join student "
                . "on upload_timetables .id_c=student.id_c"
                . " where id_student=$id ";
        return $this->DB->query($query);
    }
    public function id_type($username,$password){
          $queryd = "SELECT id_type FROM users WHERE username='$username' AND password='$password'";
                            $result=  $this->DB->query($queryd);
                            while ($row=  mysqli_fetch_array($result)){
                                $id_type=$row['id_type'];
                            
                            return $id_type;
    }
    
                            }
 public function addClassl(Classl $Classl){
     
     $id_c = $Classl->getid_c();
     $name =$Classl->getname();
  
     
      $query_class = "INSERT INTO class VALUES ( $id_c, '$name' )" ;
      
      $this->DB->query($query_class);
         
    }
 public function updateTeacher(Teacher $teacher ) // $teacher is object from tacher type
    {
        $fname     =$teacher->getFName();
        $lname     =$teacher->getLName();
        $phone     =$teacher->getPhone(); 
        $adress    =$teacher->getAddress(); 
        $username  =$teacher->getUserName(); 
        $password  =$teacher->getPassword(); 
        $id        =$teacher->geID(); 
        $email     =$teacher->getEmail();
        $DOB       =$teacher->getDOB();
        $id_type   =$teacher->getidtype();
        $geneder   =$teacher->getgeneder();
        $salary    =$teacher->getSalary();
        $bouns     =$teacher->getbouns();
        $subject   =$teacher->getSubject();
        $id_c      =$teacher->getidclass();
        $code      =$teacher->getcode();
        
        
        $query    = " update users join teacher on users.id = teacher.id_teacher join staff on teacher.id_teacher = staff.id_staff set users.fname = '$fname' ,"
                        . " users.lname = '$lname' , users.phone ='$phone' ,users.address = '$adress',"
                        . " users.geneder = '$geneder',users.DOB = '$DOB',users.username = '$username',"
                        . " users.password = '$password',users.approve = 1,users.eamil = '$email' ,"
                        . " teacher.code = '$code' ,teacher.id_c = '$id_c' ,subject_name = '$subject'"
                        . ", staff.salary = '$salary', staff.bonus = '$bouns' where users.id =$id ";
        $this->DB->query($query);
               
    }
    public function url($id_type){
        $query="SELECT url_data.* from url_data join user_url_type where"
                                    . " url_data.id_url=user_url_type.id_url and user_url_type.id_type=$id_type";
                            return    $result=  $this->DB->query($query); 
    }

    public function addStudent(student $student) //$student is Object from Student type 
    {
     $fname      =$student->getFName();
     $lname      =$student->getLName();
     $phone      =$student->getPhone(); 
     $adress     =$student->getAddress(); 
     $username   =$student->getUserName(); 
     $password   =$student->getPassword(); 
     $id         =$student->geID(); 
     $email      =$student->getEmail();
     $DOB        =$student->getDOB();
     $id_type    =$student->getidtype();
     $geneder    =$student->getgeneder();
     $id_parent  =$student->getidparent();
     $id_level   =$student->getidlevel();
     $id_c       =$student->getidclass();
     $fees       =$student->getfees();
     $father_name=$student->getfathername();
     $mother_name=$student->getmothername();
     
    $query_users   = "INSERT INTO users VALUE($id, '$fname' , '$lname' , '$phone' ,'$adress','$geneder','$DOB',"
                                          ." '$username','$password','$id_type',1,'$email')";
    $query_student="INSERT INTO student VALUE($id,'$father_name','$mother_name',$id_level,$id_c,$id_parent,$fees)";
    $query_s_fees="INSERT INTO student_fees VALUE($id,'$fname','0','0','0','0/0/0','$id_level')";
    $this->DB->query($query_users);
    $this->DB->query($query_student);
    $this->DB->query($query_s_fees);
    }
    public function updateStudent($student) //$student is Object from Student type
    {
        
    }
    public function deleteStudent($tudentID) // $studentID is id of student that you want to delete him 
    {
        /*
         * here you do n't delete actualy , you will send notification to manager to tell him you want to delete this student 
         */
    }
    //ADD PARENT
    public function addparent(Parente $parent){
     $fname      =$parent->getFName();
     $lname      =$parent->getLName();
     $phone      =$parent->getPhone(); 
     $adress     =$parent->getAddress(); 
     $username   =$parent->getUserName(); 
     $password   =$parent->getPassword(); 
     $id         =$parent->geID(); 
     $email      =$parent->getEmail();
     $DOB        =$parent->getDOB();
     $id_type    =$parent->getidtype();
     $geneder    =$parent->getgeneder();
     $job        =$parent->getjob();
     $query_users   = "INSERT INTO users VALUE($id, '$fname' , '$lname' , '$phone' ,'$adress','$geneder','$DOB',"
                                          ." '$username','$password','$id_type',1,'$email')";
     $query_parent="INSERT INTO parent VALUE($id,'$job')";
     $this->DB->query($query_users);
     $this->DB->query($query_parent);
             
    }
            


    public function addTeacher(Teacher $teacher ) // $teacher is object from tacher type
    {
     $fname     =$teacher->getFName();
     $lname     =$teacher->getLName();
     $phone     =$teacher->getPhone(); 
     $adress    =$teacher->getAddress(); 
     $username  =$teacher->getUserName(); 
     $password  =$teacher->getPassword(); 
     $id        =$teacher->geID(); 
     $email     =$teacher->getEmail();
     $DOB       =$teacher->getDOB();
     $id_type   =$teacher->getidtype();
     $geneder   =$teacher->getgeneder();
     $salary    =$teacher->getSalary();
     $bouns     =$teacher->getbouns();
     $subject   =$teacher->getSubject();
     $id_c      =$teacher->getidclass();
     $code      =$teacher->getcode();
  $query_users   = "INSERT INTO users VALUE($id, '$fname' , '$lname' , '$phone' ,'$adress','$geneder',"
          .                                 "'$DOB','$username','$password','$id_type',1,'$email')";
  $query_staff    = "INSERT INTO staff VALUES ($id , '$salary','$bouns')";
  $query_teacher = "INSERT INTO teacher VALUES ($id , '$code' , $id_c,'$subject' )" ; 
            $this->DB->query($query_users);
            $this->DB->query($query_staff);
            $this->DB->query($query_teacher);
    }
  
    public function deleteTeacher($teacherID) // $teacherID is ID of teacher you want to delete it 
    {
        
    }
    
    
    public function updateResource() // I don't know what it shoud by taken
    {
        
    }
    // ana mesh 3aref de lyha lazma wala la
    public function deleteResource() // I don't know what it shoud by taken
    {
        
    }
    //add trip
     public function addTrip(Trip $trip) // $activity is Object from activity type
    
    {
     $title = $trip->gettitle();
     $ID = $trip->getID();
     $name =$trip->getname();
     $date =$trip->getdate();
     $price =$trip->getprice();
     
      $query_trips = "INSERT INTO trips VALUES ('$title' , $ID , '$name','$date','$price' )" ;
      
      $this->DB->query($query_trips);
         
    }
 public function addActivity(Activity $activity) // $activity is Object from activity type

    {
        $name = $activity->getName();
        $query_activity="INSERT INTO activity VALUES('',,'$name')";
        $this->DB->query($query_activity);
        echo 'ana tmam';
        
    }
    public function history_of_activity(){
        return $this->DB->query("select * from register_activity");
    }
public function history_of_trips(){
        return $this->DB->query("select * from reserve_trip");
    }

    public function addNews($news) // news is Object from new type
    {
        
    }
    public function uploadTimeTable()
    {
        
    }
    
    public function createReport($report)
    {
    }
    //add resource
     public function addRecource(Recources $recource) // $Recource is an Object fron recources type
    {
        $id=$recource->getID();
        $name=$recource->getName();
        $current=$recource->getCurrnt();
        $expired=$recource->getExperid();
        $date=$recource->getDate();
        $price=$recource->getprice();
        $query ="INSERT INTO resource VALUES($id,' $name' ,$current,$expired,'$date','$price')";
        $this->DB->query($query);
    }
    //update resource
    public function updateRecource($recource) // $Recource is an Object fron recources type
    {
        
    }
    public function createReport_of_Resource()
     { 
       $query_R_resource ="select * from resource" ; 
       return  $this->DB->query($query_R_resource) ;
     }
      public function Report_of_sfees($id_level)
     { 
       $query_R_sfees ="select * from student_fees where id_level='$id_level'" ; 
       return  $this->DB->query($query_R_sfees) ;
     }
     
}
