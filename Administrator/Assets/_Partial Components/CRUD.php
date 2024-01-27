<?php
// $filepath = realpath(dirname(__FILE__));
include_once('Database.php');
include_once('Format.php');

class CRUD{

	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
    
    /*===========================================================================================================================
    Insert or Add Function these function insert data from webpage to the database
===========================================================================================================================*/
 

public function addAdvertisement($Heading, $Image){

        $Heading = $this->fm->validation($Heading);

        $Heading = mysqli_real_escape_string($this->db->link, $Heading);
        
        if ($Heading == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
        $chkquery = "select * from Ads where Heading = '$Heading'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult != false) {
            echo "Heading address already exist!";
            exit(); 
        }
        else{
            $query = "insert into Ads(Heading, Image)value('".$Heading."', '".$Image."')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Not Registered !";
                exit();
            }
        }
    }
}

    public function addCarousel($Heading, $Image){

        $Heading = $this->fm->validation($Heading);

        $Heading = mysqli_real_escape_string($this->db->link, $Heading);
        
        if ($Heading == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
        $chkquery = "select * from Carousel where Heading = '$Heading'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult != false) {
            echo "Heading address already exist!";
            exit(); 
        }
        else{
            $query = "insert into Carousel(Heading, Image, Status)value('".$Heading."', '".$Image."', '1')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Not Registered !";
                exit();
            }
        }
    }
}

    public function addNews($Heading, $Body, $Source, $File){
        $Heading = $this->fm->validation($Heading);
        $Body = $this->fm->validation($Body);
        $Source = $this->fm->validation($Source);

        $Heading = mysqli_real_escape_string($this->db->link, $Heading);
        $Body = mysqli_real_escape_string($this->db->link, $Body);
        $Source = mysqli_real_escape_string($this->db->link, $Source);

        if ($Heading == "" || $Body == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
        $chkquery = "select * from News where Heading = '$Heading'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult != false) {
            echo "Heading address already exist!";
            exit(); 
        }
        $chckquery = "select * from News where Body = '$Body'";
        $chckresult = $this->db->select($chckquery);
        if ($chckresult != false) {
            echo "Body Data already exist!";
            exit(); 
        }
        else{
            $query = "insert into News(Heading, Body, Source, File)values('".$Heading."', '".$Body."', '".$Source."', '".$File."')";
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Error: Not Registered !";
                exit();
            }
        }
    }
}

public function addResearch($Heading, $Body, $Full_Name, $File){
        $Heading = $this->fm->validation($Heading);
        // $Body = $this->fm->validation($Body);
        $Full_Name = $this->fm->validation($Full_Name);

        $Heading = mysqli_real_escape_string($this->db->link, $Heading);
        $Body = mysqli_real_escape_string($this->db->link, $Body);
        $Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);

        if ($Heading == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
        $chkquery = "select * from Research where Heading = '$Heading'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult != false) {
            echo "Heading address already exist!";
            exit(); 
        }
        $chckquery = "select * from Research where Body = '$Body'";
        $chckresult = $this->db->select($chckquery);
        if ($chckresult != false) {
            echo "Body Data already exist!";
            exit(); 
        }
        else{
            $query = "insert into Research(Heading, Body, User, File, Status)value('".$Heading."', '".$Body."', '".$Full_Name."', '".$File."','Active')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Error: Not Registered";
                exit();
            }
        }
    }
}


public function addBook($Full_Name, $Duration, $Fees, $Description, $Image){
        $Full_Name = $this->fm->validation($Full_Name);
        $Duration = $this->fm->validation($Duration);
        $Fees = $this->fm->validation($Fees);
        $Description = $this->fm->validation($Description);

        $Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);
        $Duration = mysqli_real_escape_string($this->db->link, $Duration);
        $Fees = mysqli_real_escape_string($this->db->link, $Fees);
        $Description = mysqli_real_escape_string($this->db->link, $Description);

        if ($Full_Name == "" || $Duration == "" || $Fees == "" || $Description == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
        $chkquery = "select * from Book where Book_Name = '$Full_Name'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult != false) {
            echo "Book already exist!";
            exit(); 
        }
        else{
            $query = "insert into Book(Book_Name, Duration, Fees, Description, Image)values('".$Full_Name."', '".$Duration."', '".$Fees."', '".$Description."', '".$Image."')";
       
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully ";
                
                exit();
            }
            else{
                echo "Error: Not Registered !";
                exit();
            }
        }
    }
}

public function addReadingAudio($Audio, $Book_ID, $Reading_Unit){
        $Book_ID = $this->fm->validation($Book_ID);
        $Reading_Unit = $this->fm->validation($Reading_Unit);
        
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);
        $Reading_Unit = mysqli_real_escape_string($this->db->link, $Reading_Unit);

        if ($Book_ID == "" || $Reading_Unit == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
            $query = "insert into Reading_Audio(Audio, Book, Unit)value('".$Audio."', '".$Book_ID."', '".$Reading_Unit."')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Not Registered!";
                exit();
            }
    }
}

public function addListeningAudio($Audio, $Book_ID, $Listening_Unit){
        $Book_ID = $this->fm->validation($Book_ID);
        $Listening_Unit = $this->fm->validation($Listening_Unit);
        
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);
        $Listening_Unit = mysqli_real_escape_string($this->db->link, $Listening_Unit);

        if ($Book_ID == "" || $Listening_Unit == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
            $query = "insert into Listening_Audio(Audio, Book, Unit)value('".$Audio."', '".$Book_ID."', '".$Listening_Unit."')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Not Registered!";
                exit();
            }
    }
}

public function addVocabularyAudio($Audio, $Book_ID, $Vocabulary_Day){
        $Book_ID = $this->fm->validation($Book_ID);
        $Vocabulary_Day = $this->fm->validation($Vocabulary_Day);
        
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);
        $Vocabulary_Day = mysqli_real_escape_string($this->db->link, $Vocabulary_Day);

        if ($Book_ID == "" || $Vocabulary_Day == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
            $query = "insert into Vocabulary_Audio(Audio, Book, Day)value('".$Audio."', '".$Book_ID."', '".$Vocabulary_Day."')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Not Registered!";
                exit();
            }
    }
}

public function addConversationAudio($Audio, $Book_ID, $Conversation_Unit){
        $Book_ID = $this->fm->validation($Book_ID);
        $Conversation_Unit = $this->fm->validation($Conversation_Unit);
        
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);
        $Conversation_Unit = mysqli_real_escape_string($this->db->link, $Conversation_Unit);

        if ($Book_ID == "" || $Conversation_Unit == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
            $query = "insert into Conversation_Audio(Audio, Book, Unit)value('".$Audio."', '".$Book_ID."', '".$Conversation_Unit."')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Not Registered!";
                exit();
            }
    }
}

public function addAudio($Audio, $Question, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID, $Description){
        $Question = $this->fm->validation($Question);
        $First_Answer = $this->fm->validation($First_Answer);
        $Second_Answer = $this->fm->validation($Second_Answer);
        $Third_Answer = $this->fm->validation($Third_Answer);
        $Fourth_Answer = $this->fm->validation($Fourth_Answer);
        $Right_Answer = $this->fm->validation($Right_Answer);
        $Book_ID = $this->fm->validation($Book_ID);
        $Descriptipn = $this->fm->validation($Description);
        
        $Question = mysqli_real_escape_string($this->db->link, $Question);
        $First_Answer = mysqli_real_escape_string($this->db->link, $First_Answer);
        $Second_Answer = mysqli_real_escape_string($this->db->link, $Second_Answer);
        $Third_Answer = mysqli_real_escape_string($this->db->link, $Third_Answer);
        $Fourth_Answer = mysqli_real_escape_string($this->db->link, $Fourth_Answer);
        $Right_Answer = mysqli_real_escape_string($this->db->link, $Right_Answer);
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);
        $Descriptipn = mysqli_real_escape_string($this->db->link, $Description);

        if ($Question == "" || $First_Answer == "" || $Second_Answer == "" || $Third_Answer == "" || $Fourth_Answer == "" || $Right_Answer == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
            $query = "insert into Audio(Audio, Question, Answer0, Answer1, Answer2, Answer3, Right_Answer, Book_ID, Description, Status)value('".$Audio."', '".$Question."', '".$First_Answer."', '".$Second_Answer."', '".$Third_Answer."', '".$Fourth_Answer."', '".$Right_Answer."', '".$Book_ID."', '".$Description."','Active')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Not Registered!";
                exit();
            }
    }
}

public function addReading($Body, $Question, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID){
        $Body = $this->fm->validation($Body);
        $Question = $this->fm->validation($Question);
        $First_Answer = $this->fm->validation($First_Answer);
        $Second_Answer = $this->fm->validation($Second_Answer);
        $Third_Answer = $this->fm->validation($Third_Answer);
        $Fourth_Answer = $this->fm->validation($Fourth_Answer);
        $Right_Answer = $this->fm->validation($Right_Answer);
        $Book_ID = $this->fm->validation($Book_ID);

        $Body = mysqli_real_escape_string($this->db->link, $Body);
        $Question = mysqli_real_escape_string($this->db->link, $Question);
        $First_Answer = mysqli_real_escape_string($this->db->link, $First_Answer);
        $Second_Answer = mysqli_real_escape_string($this->db->link, $Second_Answer);
        $Third_Answer = mysqli_real_escape_string($this->db->link, $Third_Answer);
        $Fourth_Answer = mysqli_real_escape_string($this->db->link, $Fourth_Answer);
        $Right_Answer = mysqli_real_escape_string($this->db->link, $Right_Answer);
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);

        if ($Body == "" || $Question == "" || $First_Answer == "" || $Second_Answer == "" || $Third_Answer == "" || $Fourth_Answer == "" || $Right_Answer == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
        $chkquery = "SELECT * from Reading WHERE Body = '$Body'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult != false) {
            echo "Reading Text already exist!";
            exit(); 
        }
        else{
            $query = "insert into Reading(Body, Question, Answer0, Answer1, Answer2, Answer3, Right_Answer, Book_ID, Status)value('".$Body."', '".$Question."', '".$First_Answer."',  '".$Second_Answer."', '".$Third_Answer."', '".$Fourth_Answer."', '".$Right_Answer."','".$Book_ID."', '1')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Error: Not Registered !";
                exit();
            }
        }
    }
}

public function addVocabulary($Word, $First_Answer, $Second_Answer ,$Third_Answer, $Fourth_Answer, $Right_Answer ,$Book_ID){
        
        $Word = $this->fm->validation($Word);
        $First_Answer = $this->fm->validation($First_Answer);
        $Second_Answer = $this->fm->validation($Second_Answer);
        $Third_Answer = $this->fm->validation($Third_Answer);
        $Fourth_Answer = $this->fm->validation($Fourth_Answer);
        $Right_Answer = $this->fm->validation($Right_Answer);
        $Book_ID = $this->fm->validation($Book_ID);

        $Word = mysqli_real_escape_string($this->db->link, $Word);
        $First_Answer = mysqli_real_escape_string($this->db->link, $First_Answer);
        $Second_Answer = mysqli_real_escape_string($this->db->link, $Second_Answer);
        $Third_Answer = mysqli_real_escape_string($this->db->link, $Third_Answer);
        $Fourth_Answer = mysqli_real_escape_string($this->db->link, $Fourth_Answer);
        $Right_Answer = mysqli_real_escape_string($this->db->link, $Right_Answer);
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);

        if ($Word == "" || $First_Answer == "" || $Second_Answer == "" || $Third_Answer == "" || $Fourth_Answer == "" || $Right_Answer == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
        $chkquery = "SELECT * from Vocabulary WHERE Word = '$Word'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult != false) {
            echo "Word already exist in Vocabulary!";
            exit(); 
        }
        else{
            $query = "insert into Vocabulary(Word, Answer0, Answer1, Answer2, Answer3, Right_Answer, Book_ID, Status)value('".$Word."', '".$First_Answer."',  '".$Second_Answer."', '".$Third_Answer."', '".$Fourth_Answer."', '".$Right_Answer."','".$Book_ID."', '1')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully";
                
                exit();
            }
            else{
                echo "Not Registered ";
                exit();
            }
        }
    }
}

public function addGrammer($Question, $First_Answer, $Second_Answer ,$Third_Answer, $Fourth_Answer, $Right_Answer ,$Book_ID){
        
        $Question = $this->fm->validation($Question);
        $First_Answer = $this->fm->validation($First_Answer);
        $Second_Answer = $this->fm->validation($Second_Answer);
        $Third_Answer = $this->fm->validation($Third_Answer);
        $Fourth_Answer = $this->fm->validation($Fourth_Answer);
        $Right_Answer = $this->fm->validation($Right_Answer);
        $Book_ID = $this->fm->validation($Book_ID);

        $Question = mysqli_real_escape_string($this->db->link, $Question);
        $First_Answer = mysqli_real_escape_string($this->db->link, $First_Answer);
        $Second_Answer = mysqli_real_escape_string($this->db->link, $Second_Answer);
        $Third_Answer = mysqli_real_escape_string($this->db->link, $Third_Answer);
        $Fourth_Answer = mysqli_real_escape_string($this->db->link, $Fourth_Answer);
        $Right_Answer = mysqli_real_escape_string($this->db->link, $Right_Answer);
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);

        if ($Question == "" || $First_Answer == "" || $Second_Answer == "" || $Third_Answer == "" || $Fourth_Answer == "" || $Right_Answer == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
        $chkquery = "SELECT * from Grammer WHERE Question = '$Question'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult != false) {
            echo "Grammer Question already exist!";
            exit(); 
        }
        else{
            $query = "insert into Grammer(Question, Answer0, Answer1, Answer2, Answer3, Right_Answer, Book_ID, Status)value('".$Question."', '".$First_Answer."',  '".$Second_Answer."', '".$Third_Answer."', '".$Fourth_Answer."', '".$Right_Answer."','".$Book_ID."','1')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully ";
                
                exit();
            }
            else{
                echo "Error: Not Registered";
                exit();
            }
        }
    }
}

public function addStudent($St_ID, $Full_Name, $Father_Name, $Marks, $Grade, $Phone_No, $Book_ID){
        $St_ID = $this->fm->validation($St_ID);
        $Full_Name = $this->fm->validation($Full_Name);
        $Father_Name = $this->fm->validation($Father_Name);
        $Marks = $this->fm->validation($Marks);
        $Grade = $this->fm->validation($Grade);
        $Phone_No = $this->fm->validation($Phone_No);
        $Book_ID = $this->fm->validation($Book_ID);

        $St_ID = mysqli_real_escape_string($this->db->link, $St_ID);
        $Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);
        $Father_Name = mysqli_real_escape_string($this->db->link, $Father_Name);
        $Marks = mysqli_real_escape_string($this->db->link, $Marks);
        $Grade = mysqli_real_escape_string($this->db->link, $Grade);
        $Phone_No = mysqli_real_escape_string($this->db->link, $Phone_No);
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);

        if ($St_ID == "" || $Full_Name == "" || $Father_Name == "" || $Marks == "" || $Grade == "" || $Phone_No == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
        $chkquery = "select * from Student where St_ID = '$St_ID'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult != false) {
            echo "Student_ID already exist!";
            exit(); 
        }
        else{
            $query = "insert into Student(St_ID, Full_Name, Father_Name, Marks, Grade, Phone_No, Book_ID, Status)value('".$St_ID."', '".$Full_Name."', '".$Father_Name."',  '".$Marks."', '".$Grade."','".$Phone_No."', '".$Book_ID."','Active')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully !";
                
                exit();
            }
            else{
                echo "Error: Not Registered !";
                exit();
            }
        }
    }
}
public function addUser(){
    echo "This is working";
}
// public function addUser($Full_Name, $Username, $Password, $Email, $Gender, $Phone_No, $File){

//         $Full_Name = $this->fm->validation($Full_Name);
//         $Username = $this->fm->validation($Username);
//         $Password = $this->fm->validation($Password);
//         $Email = $this->fm->validation($Email);
//         $Gender = $this->fm->validation($Gender);
//         $Phone_No = $this->fm->validation($Phone_No);

//         $Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);
//         $Username = mysqli_real_escape_string($this->db->link, $Username);
//         $Password = mysqli_real_escape_string($this->db->link, md5($Password));
//         $Email = mysqli_real_escape_string($this->db->link, $Email);
//         $Gender = mysqli_real_escape_string($this->db->link, $Gender);
//         $Phone_No = mysqli_real_escape_string($this->db->link, $Phone_No);

//         if ($Full_Name == "" || $Username == "" || $Password == "" || $Email == "" || $Gender == "" || $Phone_No == "") {
//             echo "empty";
//             exit();
//         }
//         else if(filter_var($Email, FILTER_VALIDATE_EMAIL) === false){
//             echo "error-email";
//             exit();
//         }
//         else{
//         $chkquery = "select * from Users where Email = '$Email'";
//         $chkresult = $this->db->select($chkquery);
//         if ($chkresult != false) {
//             echo "repeat-email";
//             exit(); 
//         }
//         $chckquery = "select * from Users where Username = '$Username'";
//         $chckresult = $this->db->select($chckquery);
//         if ($chckresult != false) {
//             echo "repeat-username";
//             exit(); 
//         }
//         else{
//             $query = "insert into Users(Full_Name, Username, Password, Email, Gender, Phone_No, Image, Role_ID, Status)value('".$Full_Name."', '".$Username."', '".$Password."', '".$Email."', '".$Gender."', '".$Phone_No."', '".$File."', '2', '1')";
        
//             $inserted_row = $this->db->insert($query);
//             if($inserted_row){
//                 echo "success";
                
//                 exit();
//             }
//             else{
//                 echo "error";
//                 exit();
//             }
//         }
//     }               
// }


public function addAboutData($Heading, $Body){
    
    $Heading = $this->fm->validation($Heading);
    $Body = $this->fm->validation($Body);

    $Heading = mysqli_real_escape_string($this->db->link, $Heading);
    $Body = mysqli_real_escape_string($this->db->link, $Body);

    if ($Heading == "" || $Body == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else{
        $chkquery = "select * from About_Us where Heading = '$Heading'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult != false) {
            echo "Heading address already exist! Try New E-Mail";
            exit(); 
        }
        $chckquery = "select * from About_Us where Body = '$Body'";
        $chckresult = $this->db->select($chckquery);
        if ($chckresult != false) {
            echo "Body Data already exist! try new one. ";
            exit(); 
        }
        else{
            $query = "insert into About_Us(Heading, Body)value('".$Heading."', '".$Body."')";
        
            $inserted_row = $this->db->insert($query);
            if($inserted_row){
                echo "Registration Successfully !";
                exit();
            }
            else{
                echo "Error: Not Registered !";
                exit();
            }
        }
    }
}

/*===========================================================================================================================
    End of Insert or Add Function these function insert data from webpage to the database
===========================================================================================================================*/
 

/*=========================================================================================================================
    Start of  All Select Function, it fetch data from database and shwo ing webpages
==========================================================================================================================*/
public function getTotalReading(){
    // public function get_data_in_table(){
        $output = '';
        $query = "SELECT * FROM Reading";
        $getResult = $this->db->select($query);
        $total = $getResult->num_rows;
        
        if(!$getResult){
            return "0";

        }else{
            $total =$getResult->num_rows;
            return $total;
        }

    }
public function getTotalRows(){
        $query = "SELECT * from News where Status = 'Publish'";
        mysqli_set_charset($this->db->link, 'UTF8');
        $getResult = $this->db->select($query);
        $total =$getResult->num_rows;
        return $total;
    }

public function Load_Advertisement_Data(){
        $output = '';
        $query = "SELECT * FROM Ads order by Ad_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Advertisement Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> ID No </th>
                    <th> Heading </th>
                    <th> Image </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');

                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Heading"]. '</td> 
                    <td>' .$row["Image"]. '</td>                    
                    <td style = "width: 6%;"> <a href="" class = "edit-ads" id = "' .$row["Ad_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-ads" id = "' .$row["Ad_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
    }
    $output .='</table>';
    return $output;
        }
        
}

public function Load_Carousel_Data(){
        $output = '';
        $query = "SELECT * FROM Carousel order by Carousel_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Slide Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> ID No </th>
                    <th> Heading </th>
                    <th> Image </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');

                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Heading"]. '</td> 
                    <td>' .$row["Image"]. '</td>                    
                    <td style = "width: 6%;"> <a href="" class = "edit-slide" id = "' .$row["Carousel_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-slide" id = "' .$row["Carousel_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
    }
    $output .='</table>';
    return $output;
        }
        
}
public function Load_News_Data(){
        $output = '';
        $query = "SELECT * FROM News order by News_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In News Table</h3>";
        }
        else{
        $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> <input type="checkbox" id="allselect"> </th>
                    <th> ID No </th>
                    <th> Heading </th>
                    <th> Body </th>
                    <th> Source </th>
                    <th> Date </th>
                    <th> Edt </th>
                    <th> Dlt </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');

            if($row['Status']=="Pending"){
               $output .='<tr> 
                    <td> <input type="checkbox" id="javascript"> </td>
                    <td style = "color: #D05454;">'.'<i class = "fa fa-lock"></i> ' .$i. '</td> 
                    <td style = "color: #D05454;">' .$row["Heading"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Source"]. '</td>
                    <td style = "color: #D05454;">' .$row["Date"]. '</td> 
                    <td> <a href="" class = "edit-news" id = "' .$row["News_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a> </td>
                    <td> <a href="" class = "delete-news" id = "' .$row["News_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>

               </tr>';
            }
            else{
                                  
                $output .='
                 <tr>
                    <td> <input type="checkbox"e" id="javascript"> </td>
                    <td>' .$i. '</td>
                    <td>' .$row["Heading"]. '</td> 
                    <td>' .$row["Body"]. '</td> 
                    <td>' .$row["Source"]. '</td>
                    <td>' .$row["Date"]. '</td>
                    <td style = "width: 6%;"> <a href="" class = "edit-news" id = "' .$row["News_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit News"> <i class = "fa fa-pencil"></i> </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-news" id = "' .$row["News_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-trash"></i> </a> </td>
                 </tr>
                 ';
            }$i++;
    }
    $output .='</table>';
    return $output;
    }
}

public function Load_Research_Data(){
        $output = '';
        $query = "SELECT * FROM Research order by Research_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Research Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> ID No </th>
                    <th> Heading </th>
                    <th> Body </th>
                    <th> File </th>
                    <th> User </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');

                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Heading"]. '</td> 
                    <td>' .$row["Body"]. '</td>
                    <td>' .$row["File"]. '</td>
                    <td>' .$row["User"]. '</td>                    
                    <td style = "width: 6%;"> <a href="" class = "edit-research" id = "' .$row["Research_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-research" id = "' .$row["Research_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
    }
    $output .='</table>';
    return $output;
        }
        
}
public function Load_Books_Data(){
        $output = '';
        $query = "SELECT * FROM Book order by Book_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Books Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> ID No </th>
                    <th> Name </th>
                    <th> Duration </th>
                    <th> Fees </th>
                    <th> Status</th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            if($row['Status']=="Pending"){
               $output .='<tr> 
                    <td style = "color: #D05454;">'.'<i class = "fa fa-lock"></i> ' .$i. '</td> 
                    <td style = "color: #D05454;">' .$row["Book_Name"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Duration"]. '</td>
                    <td style = "color: #D05454;">' .$row["Fees"]. '</td> 
                    <td> <a href="" class = "pending-book" id = "' .$row["Book_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="This Book is Published Change Status to Pending?"> Pending </a> </td>
                    <td> <a href="" class = "edit-book" id = "' .$row["Book_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a> </td>
                    <td> <a href="" class = "delete-book" id = "' .$row["Book_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
               </tr>';
            }else{
                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Book_Name"]. '</td> 
                    <td>' .$row["Duration"]. '</td>
                    <td>' .$row["Fees"]. '</td>  
                    <td> <a href="" class = "publish-book" id = "' .$row["Book_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="This Book is Published Change Status to Pending?"> Publish </a> </td>
                    <td style = "width: 6%;"> <a href="" class = "edit-book" id = "' .$row["Book_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-book" id = "' .$row["Book_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            
            }
            $i++;
                
    }
    $output .='</table>';
    return $output;
    }
}
public function Load_Student_Data(){
        $output = '';
        $query = "SELECT * FROM Viw_Student order by Student_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Student Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Student ID </th>
                    <th> Name </th>
                    <th> Father Name </th>
                    <th> Marks </th>
                    <th> Grade </th>
                    <th> Phone No </th>
                    <th> Book </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');

                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["St_ID"]. '</td> 
                    <td>' .$row["Full_Name"]. '</td>
                    <td>' .$row["Father_Name"]. '</td>
                    <td>' .$row["Marks"]. '</td>
                    <td>' .$row["Grade"]. '</td>
                    <td>' .$row["Phone_No"]. '</td>
                    <td>' .$row["Book_Name"]. '</td>                    
                    
                    <td style = "width: 6%;"> <a href="" class = "edit-student" id = "' .$row["Student_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-student" id = "' .$row["Student_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
    }
    $output .='</table>';
    return $output;
        }
        
}

public function Load_Reading_Audio_Data(){
        $output = '';
        $query = "SELECT * FROM Reading_Audio order by Audio_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Reading Audio Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Audio </th>
                    <th> Book </th>
                    <th> Unit </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');

                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td style = "color: #D05454;"><audio src=".././Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2"  controls > </audio></td>  
                    <td>' .$row["Book"]. '</td>                    
                    <td>' .$row["Unit"]. '</td>
                    <td style = "width: 6%;"> <a href="" class = "edit-reading-audio" id = "' .$row["Audio_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-reading-audio" id = "' .$row["Audio_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
    }
    $output .='</table>';
    return $output;
        }
        
}

public function Load_Listening_Audio_Data(){
        $output = '';
        $query = "SELECT * FROM Listening_Audio order by Audio_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Listening Audio Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Audio </th>
                    <th> Book </th>
                    <th> Unit </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');

                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td style = "color: #D05454;"><audio src=".././Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2"  controls > </audio></td>  
                    <td>' .$row["Book"]. '</td>                    
                    <td>' .$row["Unit"]. '</td>
                    <td style = "width: 6%;"> <a href="" class = "edit-listening-audio" id = "' .$row["Audio_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-listening-audio" id = "' .$row["Audio_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
    }
    $output .='</table>';
    return $output;
        }
        
}

public function Load_Vocabulary_Audio_Data(){
        $output = '';
        $query = "SELECT * FROM Vocabulary_Audio order by Audio_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Vocabulary Audio Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Audio </th>
                    <th> Book </th>
                    <th> Day </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');

                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td style = "color: #D05454;"><audio src=".././Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2"  controls > </audio></td>  
                    <td>' .$row["Book"]. '</td>                    
                    <td>' .$row["Day"]. '</td>
                    <td style = "width: 6%;"> <a href="" class = "edit-vocabulary-audio" id = "' .$row["Audio_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;"> <a href="" class = "delete-vocabulary-audio" id = "' .$row["Audio_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
    }
    $output .='</table>';
    return $output;
        }
        
}

public function Load_Conversation_Audio_Data(){
        $output = '';
        $query = "SELECT * FROM Conversation_Audio order by Audio_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Conversation Audio Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Audio </th>
                    <th> Book </th>
                    <th> Unit </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');

                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td style = "color: #D05454;"><audio src=".././Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2"  controls > </audio></td>  
                    <td>' .$row["Book"]. '</td>                    
                    <td>' .$row["Unit"]. '</td>
                    <td style = "width: 6%;"> <a href="" class = "edit-conversation-audio" id = "' .$row["Audio_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-conversation-audio" id = "' .$row["Audio_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
    }
    $output .='</table>';
    return $output;
    }    
}

public function Load_Audio_Data(){
        $output = '';
        $query = "SELECT * FROM Viw_Audio order by Audio_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Audio Table</h3>";
        }
        else{
            $output .='
        <table class="table table-responsive table-stripped table-hover">
            <thead>
                <tr>
                    <th> ID No </th>
                    <th> Listening </th>
                    <th> Question </th>
                    <th> Answer1 </th>
                    <th> Answer2 </th>
                    <th> Answer3 </th>
                    <th> Answer4 </th>
                    <th> Right Ans </th>
                    <th> Book </th>
                    <th> Status </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');
                $Aud = $row["Audio"];
                if($row['Status']=="0"){
               $output .='<tr> 
                    <td style = "color: #D05454;">'.'<i class = "fa fa-lock"></i> ' .$i. '</td>
                    <td style = "color: #D05454;"><audio src=".././Assets/Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2"  controls > </audio></td> 
                    <td style = "color: #D05454;">' .$row["Question"]. '</td>
                    <td style = "color: #D05454;">' .$row["Answer0"]. '</td>
                    <td style = "color: #D05454;">' .$row["Answer1"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Answer2"]. '</td>
                    <td style = "color: #D05454;">' .$row["Answer3"]. '</td>
                    <td style = "color: #D05454;">' .$row["Right_Answer"]. '</td>
                    <td style = "color: #D05454;">' .$row["Book_Name"]. '</td>

                    <td style = "width: 6%;"> <a href="" class = "pending-audio" id = "' .$row["Audio_ID"]. '" style="color: #D05454;" data-toggle="tooltip" data-placement="top" title="Audio Status is Pending Change Status to Published"> Pending </a></td>
                    <td style = "width: 6%;"> <a href="" class = "edit-audio" id = "' .$row["Audio_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit Audio"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-audio" id = "' .$row["Audio_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Audio"> <i class = "fa fa-times"></i> Delete </a> </td>
                </tr>';
            }
            else{   
                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td><audio src=".././Assets/Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2"  controls > </audio> </td>
                    <td>' .$row["Question"]. '</td>
                    <td>' .$row["Answer0"]. '</td>
                    <td>' .$row["Answer1"]. '</td>  
                    <td>' .$row["Answer2"]. '</td>
                    <td>' .$row["Answer3"]. '</td>
                    <td>' .$row["Right_Answer"]. '</td>                  
                    <td>' .$row["Book_Name"]. '</td>
                    <td> <a href="" class = "publish-audio" id = "' .$row["Audio_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Audio Status is Published Change Status to Pending?"> Publish </a> </td>
                    <td style = "width: 6%;"> <a href="" class = "edit-audio" id = "' .$row["Audio_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit Audio"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-audio" id = "' .$row["Audio_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Audio"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            }
            $i++;
    }
    $output .='</table>';
    return $output;
}
        
}

public function Load_Reading_Data(){
        $output = '';
        $query = "SELECT * FROM Viw_Reading order by Reading_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Reading Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Body </th>
                    <th> Question </th>
                    <th> Answer1 </th>
                    <th> Answer2 </th>
                    <th> Answer3 </th>
                    <th> Answer4 </th>
                    <th> Right_Answer </th>
                    <th> Book </th>
                    <th> Status </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');
            if($row['Status']=="0"){
               $output .='<tr> 
                    <td style = "color: #D05454;">'.'<i class = "fa fa-lock"></i> ' .$i. '</td> 
                    <td style = "color: #D05454;">' .$row["Body"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Question"]. '</td>
                    <td style = "color: #D05454;">' .$row["Answer0"]. '</td>
                    <td style = "color: #D05454;">' .$row["Answer1"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Answer2"]. '</td>
                    <td style = "color: #D05454;">' .$row["Answer3"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Right_Answer"]. '</td>
                    <td style = "color: #D05454;">' .$row["Book_Name"]. '</td>   
                    <td> <a href="" class = "pending-reading" id = "' .$row["Reading_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Reading Status is Pending Change Status to Publish?"> Pending </a> </td>
                    <td> <a href="" class = "edit-reading" id = "' .$row["Reading_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a> </td>
                    <td> <a href="" class = "delete-reading" id = "' .$row["Reading_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
               </tr>';
            }
            else{
                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Body"]. '</td> 
                    <td>' .$row["Question"]. '</td>
                    <td>' .$row["Answer0"]. '</td>
                    <td>' .$row["Answer1"]. '</td> 
                    <td>' .$row["Answer2"]. '</td>
                    <td>' .$row["Answer3"]. '</td>                    
                    <td>' .$row["Right_Answer"]. '</td>
                    <td>' .$row["Book_Name"]. '</td> 
                    <td> <a href="" class = "publish-reading" id = "' .$row["Reading_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Reading Status is Published Change Status to Pending?"> Publish </a> </td>
                    <td style = "width: 6%;"> <a href="" class = "edit-reading" id = "' .$row["Reading_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit Data"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-reading" id = "' .$row["Reading_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Data"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            }
            $i++;
    }
    $output .='</table>';
    return $output;
    }    
}

public function Load_Result_Data(){
        $output = '';
        $query = "SELECT * FROM Result order by Result_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Result Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Username </th>
                    <th> Name </th>
                    <th> Book </th>
                    <th> Subject </th>
                    <th> Ttl Qustn </th>
                    <th> Atmpt Ans </th>
                    <th> Corct Ans </th>
                    <th> Wrng Ans </th>
                    <th> No Ans </th>
                    <th> Result </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');
                
                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Username"]. '</td> 
                    <td>' .$row["Full_Name"]. '</td>
                    <td>' .$row["Book"]. '</td> 
                    <td>' .$row["Subject"]. '</td>
                    <td>' .$row["Total_Question"]. '</td>                    
                    <td>' .$row["Attempted_Answer"]. '</td>
                    <td>' .$row["Correct_Answer"]. '</td>
                    <td>' .$row["Wrong_Answer"]. '</td>                    
                    <td>' .$row["No_Answer"]. '</td>
                    <td>' .$row["Result"]. '</td>
                    <td style = "width: 7%;" > <a href="" class = "delete-result" id = "' .$row["Result_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Result"> <i class = "fa fa-times"></i> Delete </a> </td>
                </tr>
                 ';   
            $i++;
    }
    $output .='</table>';
    return $output;
    }    
}

public function Load_Grammer_Data(){
        $output = '';
        $query = "SELECT * FROM Viw_Grammer order by Grammer_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Grammer Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Question </th>
                    <th> 1st Answer </th>
                    <th> 2nd Answer </th>
                    <th> 3rd Answer </th>
                    <th> 4th Answer </th>
                    <th> Right_Answer </th>
                    <th> Book </th>
                    <th> Status </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>

            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');
                if($row['Status']=="0"){
               $output .='<tr> 
                    <td style = "color: #D05454;">'.'<i class = "fa fa-lock"></i> ' .$i. '</td>
                    <td style = "color: #D05454;">' .$row["Question"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Answer0"]. '</td>
                    <td style = "color: #D05454;">' .$row["Answer1"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Answer2"]. '</td>
                    <td style = "color: #D05454;">' .$row["Answer3"]. '</td>
                    <td style = "color: #D05454;">' .$row["Right_Answer"]. '</td>
                    <td style = "color: #D05454;">' .$row["Book_Name"]. '</td>

                    <td style = "width: 6%;"> <a href="" class = "pending-grammer" id = "' .$row["Grammer_ID"]. '" style="color: #D05454;" data-toggle="tooltip" data-placement="top" title="Publish Grammer"> Pending </a></td>
                    <td style = "width: 6%;"> <a href="" class = "edit-grammer" id = "' .$row["Grammer_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-grammer" id = "' .$row["Grammer_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Data"> <i class = "fa fa-times"></i> Delete </a> </td>
                </tr>';
            }
            else{
                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Question"]. '</td> 
                    <td>' .$row["Answer0"]. '</td>
                    <td>' .$row["Answer1"]. '</td> 
                    <td>' .$row["Answer2"]. '</td>
                    <td>' .$row["Answer3"]. '</td>                    
                    <td>' .$row["Right_Answer"]. '</td>
                    <td>' .$row["Book_Name"]. '</td>

                    <td style = "width: 6%;"> <a href="" class = "publish-grammer" id = "' .$row["Grammer_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Disable Grammer"> Publish </a></td> 
                    <td style = "width: 6%;"> <a href="" class = "edit-grammer" id = "' .$row["Grammer_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-grammer" id = "' .$row["Grammer_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Data"> <i class = "fa fa-times"></i> Delete </a> </td>
                </tr>
                 ';
            }
                
            $i++;
    }
    $output .='</table>';
    return $output;
        }
        
}

public function Load_Vocabulary_Data(){
        $output = '';
        $query = "SELECT * FROM Viw_Vocabulary order by Vocabulary_ID desc";
        $result = $this->db->select($query);
        if(!$result){
            
        echo "<h3> No Data In Vocabulary Table</h3>";
        }
        else{
            $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Word </th>
                    <th> 1st Answer </th>
                    <th> 2nd Answer </th>
                    <th> 3rd Answer </th>
                    <th> 4th Answer </th>
                    <th> Right_Answer </th>
                    <th> Book </th>
                    <th> Status </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');
            if($row['Status']=="0"){
               $output .='
               <tr> 
                    <td style = "color: #D05454;">'.'<i class = "fa fa-lock"></i> ' .$i. '</td>
                    <td style = "color: #D05454;">' .$row["Word"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Answer0"]. '</td>
                    <td style = "color: #D05454;">' .$row["Answer1"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Answer2"]. '</td>
                    <td style = "color: #D05454;">' .$row["Answer3"]. '</td>
                    <td style = "color: #D05454;">' .$row["Right_Answer"]. '</td>
                    <td style = "color: #D05454;">' .$row["Book_Name"]. '</td>

                    <td style = "width: 6%;"> <a href="" class = "pending-vocabulary" id = "' .$row["Vocabulary_ID"]. '" style="color: #D05454;" data-toggle="tooltip" data-placement="top" title="Vocabulary Status is Pending Change Status to Publish"> Pending </a></td>
                    <td style = "width: 6%;"> <a href="" class = "edit-vocabulary" id = "' .$row["Vocabulary_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit Vocabulary"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-vocabulary" id = "' .$row["Vocabulary_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Vocabulary"> <i class = "fa fa-times"></i> Delete </a> </td>
                </tr>';
            }
            else{
                $output .='
                <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Word"]. '</td> 
                    <td>' .$row["Answer0"]. '</td>
                    <td>' .$row["Answer1"]. '</td> 
                    <td>' .$row["Answer2"]. '</td>
                    <td>' .$row["Answer3"]. '</td>                    
                    <td>' .$row["Right_Answer"]. '</td>
                    <td>' .$row["Book_Name"]. '</td>
                    <td> <a href="" class = "publish-vocabulary" id = "' .$row["Vocabulary_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Vocabulary Status is Published Change Status to Pending?"> Publish </a> </td>
                    <td style = "width: 6%;"> <a href="" class = "edit-vocabulary" id = "' .$row["Vocabulary_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit Vocabulary"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;"> <a href="" class = "delete-vocabulary" id = "' .$row["Vocabulary_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Vocabulary"> <i class = "fa fa-times"></i> Delete </a> </td>
                </tr>
                 ';
            }$i++;
    }
    $output .='</table>';
    return $output;
        }
        
}

public function Load_User_Data(){
        $output = '';
        $query = "SELECT * FROM Users order by User_ID desc";
        $result = $this->db->select($query);
        mysqli_set_charset($this->db->link, 'UTF8');
        $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> <input type="checkbox" id="allselect"> </th>
                    <th> ID No </th>
                    <th> Image </th>
                    <th> Name </th>
                    <th> Username </th>
                    <th> Email </th>
                    <th> Gender </th>
                    <th> Phone_No </th>
                    <th> Role </th>
                    <th> Edt </th>
                    <th> Dlt </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){

            if($row['Status']=="Pending"){
               $output .='<tr>
                    <td> <input type="checkbox" id="single-select"> </td> 
                    <td style = "color: #D05454;">'.'<i class = "fa fa-lock"></i> ' .$i. '</td> 
                    <td style = "color: #D05454;">' .$row["Heading"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Source"]. '</td>
                    <td style = "color: #D05454;">' .$row["Date"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Visits"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Status"]. '</td>
                    <td> <a href="" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="This User is Published Change Status to Pending?"> Pending </a> </td>
                    <td> <a href="" class = "edit-user" id = "' .$row["User_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> </a> </td>
                    <td> <a href="" class = "delete-user" id = "' .$row["User_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-trash"></i> </a> </td>
               </tr>';
            }
            else{
                
                $output .='
                 <tr>
                    <td> <input type="checkbox" id="single-select"> </td>
                    <td>' .$i. '</td>
                    <td><img class="img-circle" width="30px;" height = "30px" src=".././Assets/img/_Profile_Picture/' .$row["Image"]. '" style = "margin-top: -5px; margin-bottom: -5px;" />  </td>
                    <td>' .$row["Full_Name"]. '</td> 
                    <td>' .$row["Username"]. '</td>
                    <td>' .$row["Email"]. '</td>
                    <td>' .$row["Gender"]. '</td>
                    <td>' .$row["Phone_No"]. '</td>
                    <td>' .$row["Role_ID"]. '</td>
                    <td> <a href="" class = "edit-user" id = "' .$row["User_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> </a> </td>
                    <td> <a href="" class = "delete-user" id = "' .$row["User_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-trash"></i> </a> </td>

                 </tr>
                 ';
            }$i++;
    }
    $output .='</table>';
    return $output;
}

public function Load_Mail_Data(){
    $output = '';
    $query = "SELECT * FROM Contact_Us order by Contact_ID desc";
    $result = $this->db->select($query);
    if(!$result){
        echo "No Mail Found";
    }
    else{
        $output .='
        <table class="table table table-responsive table-stripped table-hover">
            <thead>
                <tr>
                    <th> ID No </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Data </th>
                    <th> View Mail </th>
                    <th> Dlt </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){

            mysqli_set_charset($this->db->link, 'UTF8');
             if($row['Status']=="1"){
               $output .='
                 <tr style = "background: rgb(214,220,229);">
                    <td>' .$i. '</td>
                    <td>' .$row["Full_Name"]. '</td> 
                    <td>' .$row["Email"]. '</td> 
                    <td>' .$row["Phone_No"]. '</td> 
                    <td>' .$row["Date"]. '</td>              
                    <td style = "width: 10%;"> <a href="" class = "view-mail-data" id = "' .$row["Contact_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="View Mail"> <i class = "fa fa-eye"></i> View </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-mail" id = "' .$row["Contact_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Data"> <i class = "fa fa-trash"></i> </a> </td>
                 </tr>
                 ';
            }else{
                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Full_Name"]. '</td> 
                    <td>' .$row["Email"]. '</td> 
                    <td>' .$row["Phone_No"]. '</td> 
                    <td>' .$row["Date"]. '</td>              
                    <td style = "width: 10%;"> <a href="" class = "view-mail-data" id = "' .$row["Contact_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="View Mail"> <i class = "fa fa-eye"></i> View </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-mail" id = "' .$row["Contact_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Data"> <i class = "fa fa-trash"></i> </a> </td>
                 </tr>
                 ';
            }
       $i++;     
    }
    $output .='</table>';
    return $output;
    }    
}
	public function Load_About_Data(){
		$output = '';
		$query = "SELECT * FROM About_Us order by About_ID desc";
		$result = $this->db->select($query);
        
		$output .='
		<table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> ID No </th>
                    <th> Heading </th>
                    <th> Body </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
		'; 
        $i=1;
		while($row = mysqli_fetch_array($result)){
            mysqli_set_charset($this->db->link, 'UTF8');
                           
                $output .='
                 <tr>
                 	<td>' .$i. '</td>
                    <td>' .$row["Heading"]. '</td> 
                    <td>' .$row["Body"]. '</td>                   
                    <td style = "width: 6%;"> <a href="" class = "edit-about-data" id = "' .$row["About_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit Data"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-about-data" id = "' .$row["About_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Data"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
	}
	$output .='</table>';
	return $output;
}
/* =======================================================================================================================================================
Start of All Update Function, Which update Data To the Database
========================================================================================================================================================*/

public function updateAds($Ad_ID, $Heading){
    
    $Ad_ID = $this->fm->validation($Ad_ID);
    $Heading = $this->fm->validation($Heading);

    $Ad_ID = mysqli_real_escape_string($this->db->link, $Ad_ID);
    $Heading = mysqli_real_escape_string($this->db->link, $Heading);
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($Heading == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
            $query = "UPDATE `Ads` SET `Heading` = '$Heading' WHERE `Ads`.`Ad_ID` = '$Ad_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateSlide($Carousel_ID, $Heading){
    
    $Carousel_ID = $this->fm->validation($Carousel_ID);
    $Heading = $this->fm->validation($Heading);

    $Carousel_ID = mysqli_real_escape_string($this->db->link, $Carousel_ID);
    $Heading = mysqli_real_escape_string($this->db->link, $Heading);
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($Heading == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
            $query = "UPDATE `Carousel` SET `Heading` = '$Heading' WHERE `Carousel`.`Carousel_ID` = '$Carousel_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }


public function updateNews($News_ID, $Heading, $Body, $Source){
    
    $News_ID = $this->fm->validation($News_ID);
    $Heading = $this->fm->validation($Heading);
    $Body = $this->fm->validation($Body);
    $Source = $this->fm->validation($Source);
    

    $News_ID = mysqli_real_escape_string($this->db->link, $News_ID);
    $Heading = mysqli_real_escape_string($this->db->link, $Heading);
    $Body = mysqli_real_escape_string($this->db->link, $Body);
    $Source = mysqli_real_escape_string($this->db->link, $Source);
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($News_ID == "" || $Heading == "" || $Body == "" || $Source == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
            $query = "UPDATE `News` SET `News_ID` = '$News_ID', `Heading` = '$Heading', `Body` = '$Body', `Source` = '$Source' WHERE `News`.`News_ID` = '$News_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateResearch($Research_ID, $Heading, $Body){
    
    $Research_ID = $this->fm->validation($Research_ID);
    $Heading = $this->fm->validation($Heading);
    $Body = $this->fm->validation($Body);
    

    $Research_ID = mysqli_real_escape_string($this->db->link, $Research_ID);
    $Heading = mysqli_real_escape_string($this->db->link, $Heading);
    $Body = mysqli_real_escape_string($this->db->link, $Body);
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($Research_ID == "" || $Heading == "" || $Body == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
            $query = "UPDATE `Research` SET `Research_ID` = '$Research_ID', `Heading` = '$Heading', `Body` = '$Body' WHERE `Research`.`Research_ID` = '$Research_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateBook($Book_ID, $Book_Name, $Duration, $Fees){
    
    $Book_ID = $this->fm->validation($Book_ID);
    $Book_Name = $this->fm->validation($Book_Name);
    $Duration = $this->fm->validation($Duration);
    $Fees = $this->fm->validation($Fees);
    

    $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);
    $Book_Name = mysqli_real_escape_string($this->db->link, $Book_Name);
    $Duration = mysqli_real_escape_string($this->db->link, $Duration);
    $Fees = mysqli_real_escape_string($this->db->link, $Fees);
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($Book_ID == "" || $Book_Name == "" || $Duration == "" || $Fees == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
            $query = "UPDATE `Book` SET `Book_ID` = '$Book_ID', `Book_Name` = '$Book_Name', `Duration` = '$Duration', `Fees` = '$Fees' WHERE `Book`.`Book_ID` = '$Book_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateStudent($St_ID, $Student_ID, $Full_Name, $Father_Name, $Phone_No, $Book){
    
    $St_ID = $this->fm->validation($St_ID);
    $Student_ID = $this->fm->validation($Student_ID);
    $Full_Name = $this->fm->validation($Full_Name);
    $Father_Name = $this->fm->validation($Father_Name);
    $Phone_No = $this->fm->validation($Phone_No);
    $Book = $this->fm->validation($Book);
    

    $St_ID = mysqli_real_escape_string($this->db->link, $St_ID);
    $Student_ID = mysqli_real_escape_string($this->db->link, $Student_ID);
    $Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);
    $Father_Name = mysqli_real_escape_string($this->db->link, $Father_Name);
    $Phone_No = mysqli_real_escape_string($this->db->link, $Phone_No);
    $Book = mysqli_real_escape_string($this->db->link, $Book);
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($St_ID == "" || $Student_ID == "" || $Full_Name == "" || $Father_Name == "" || $Phone_No == "" || $Book == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
            $query = "UPDATE `Student` SET `St_ID` = '$St_ID', `Full_Name` = '$Full_Name', `Father_Name` = '$Father_Name', `Phone_No` = '$Phone_No', `Book` = '$Book' WHERE `Student`.`Student_ID` = '$Student_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateReading($Reading_ID, $Body, $Question, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID) {
    
    $Reading_ID = $this->fm->validation($Reading_ID);
    $Body = $this->fm->validation($Body);
    $Question = $this->fm->validation($Question);
    $First_Answer = $this->fm->validation($First_Answer);
    $Second_Answer = $this->fm->validation($Second_Answer);
    $Third_Answer = $this->fm->validation($Third_Answer);
    $Fourth_Answer = $this->fm->validation($Fourth_Answer);
    $Right_Answer = $this->fm->validation($Right_Answer);
    $Book_ID = $this->fm->validation($Book_ID);
    

    $Reading_ID = mysqli_real_escape_string($this->db->link, $Reading_ID);
    $Body = mysqli_real_escape_string($this->db->link, $Body);
    $Question = mysqli_real_escape_string($this->db->link, $Question);
    $First_Answer = mysqli_real_escape_string($this->db->link, $First_Answer);
    $Second_Answer = mysqli_real_escape_string($this->db->link, $Second_Answer);
    $Third_Answer = mysqli_real_escape_string($this->db->link, $Third_Answer);
    $Fourth_Answer = mysqli_real_escape_string($this->db->link, $Fourth_Answer);
    $Right_Answer = mysqli_real_escape_string($this->db->link, $Right_Answer);
    $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($Reading_ID == "" || $Body == "" || $Question == "" || $First_Answer == "" || $Second_Answer == "" || $Third_Answer == "" || $Fourth_Answer == "" || $Right_Answer == "" || $Book_ID == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
            $query = "UPDATE `Reading` SET `Reading_ID` = '$Reading_ID', `Body` = '$Body', `Question` = '$Question', `Answer0` = '$First_Answer', `Answer1` = '$Second_Answer', `Answer2` = '$Third_Answer', `Answer3` = '$Fourth_Answer', `Right_Answer` = '$Right_Answer', `Book_ID` = '$Book_ID' WHERE `Reading`.`Reading_ID` = '$Reading_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateReadingAudio($Audio_ID, $Book, $Unit){
    
        $Audio_ID = $this->fm->validation($Audio_ID);
        $Book = $this->fm->validation($Book);
        $Unit = $this->fm->validation($Unit);
        
        $Audio_ID = mysqli_real_escape_string($this->db->link, $Audio_ID);
        $Book = mysqli_real_escape_string($this->db->link, $Book);
        $Unit = mysqli_real_escape_string($this->db->link, $Unit);
        
        mysqli_set_charset($this->db->link, 'UTF8');
        if ($Audio_ID == "" || $Book == "" || $Unit == "") {
            echo "<span class ='error'> Please fill out all fields ! </span>";
            exit();
        }

        else{
            $query = "UPDATE `Reading_Audio` SET `Book` = '$Book', `Unit` = '$Unit' WHERE `Reading_Audio`.`Audio_ID` = '$Audio_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateListeningAudio($Audio_ID, $Book, $Unit){
    
        $Audio_ID = $this->fm->validation($Audio_ID);
        $Book = $this->fm->validation($Book);
        $Unit = $this->fm->validation($Unit);
        
        $Audio_ID = mysqli_real_escape_string($this->db->link, $Audio_ID);
        $Book = mysqli_real_escape_string($this->db->link, $Book);
        $Unit = mysqli_real_escape_string($this->db->link, $Unit);
        
        mysqli_set_charset($this->db->link, 'UTF8');
        if ($Audio_ID == "" || $Book == "" || $Unit == "") {
            echo "<span class ='error'> Please fill out all fields ! </span>";
            exit();
        }

        else{
            $query = "UPDATE `Listening_Audio` SET `Book` = '$Book', `Unit` = '$Unit' WHERE `Listening_Audio`.`Audio_ID` = '$Audio_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateVocabularyAudio($Audio_ID, $Book, $Day){
    
        $Audio_ID = $this->fm->validation($Audio_ID);
        $Book = $this->fm->validation($Book);
        $Day = $this->fm->validation($Day);
        
        $Audio_ID = mysqli_real_escape_string($this->db->link, $Audio_ID);
        $Book = mysqli_real_escape_string($this->db->link, $Book);
        $Day = mysqli_real_escape_string($this->db->link, $Day);
        
        mysqli_set_charset($this->db->link, 'UTF8');
        if ($Audio_ID == "" || $Book == "" || $Day == "") {
            echo "<span class ='error'> Please fill out all fields ! </span>";
            exit();
        }

        else{
            $query = "UPDATE `Vocabulary_Audio` SET `Book` = '$Book', `Day` = '$Day' WHERE `Vocabulary_Audio`.`Audio_ID` = '$Audio_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateConversationAudio($Audio_ID, $Book, $Unit){
    
        $Audio_ID = $this->fm->validation($Audio_ID);
        $Book = $this->fm->validation($Book);
        $Unit = $this->fm->validation($Unit);
        
        $Audio_ID = mysqli_real_escape_string($this->db->link, $Audio_ID);
        $Book = mysqli_real_escape_string($this->db->link, $Book);
        $Unit = mysqli_real_escape_string($this->db->link, $Unit);
        
        mysqli_set_charset($this->db->link, 'UTF8');
        if ($Audio_ID == "" || $Book == "" || $Unit == "") {
            echo "<span class ='error'> Please fill out all fields ! </span>";
            exit();
        }

        else{
            $query = "UPDATE `Conversation_Audio` SET `Book` = '$Book', `Unit` = '$Unit' WHERE `Conversation_Audio`.`Audio_ID` = '$Audio_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateAudio($Audio_ID, $Question, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID){
    
        $Audio_ID = $this->fm->validation($Audio_ID);
        $Question = $this->fm->validation($Question);
        $First_Answer = $this->fm->validation($First_Answer);
        $Second_Answer = $this->fm->validation($Second_Answer);
        $Third_Answer = $this->fm->validation($Third_Answer);
        $Fourth_Answer = $this->fm->validation($Fourth_Answer);
        $Right_Answer = $this->fm->validation($Right_Answer);
        $Book_ID = $this->fm->validation($Book_ID);
        
        $Audio_ID = mysqli_real_escape_string($this->db->link, $Audio_ID);
        $Question = mysqli_real_escape_string($this->db->link, $Question);
        $First_Answer = mysqli_real_escape_string($this->db->link, $First_Answer);
        $Second_Answer = mysqli_real_escape_string($this->db->link, $Second_Answer);
        $Third_Answer = mysqli_real_escape_string($this->db->link, $Third_Answer);
        $Fourth_Answer = mysqli_real_escape_string($this->db->link, $Fourth_Answer);
        $Right_Answer = mysqli_real_escape_string($this->db->link, $Right_Answer);
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);
        
        mysqli_set_charset($this->db->link, 'UTF8');
        if ($Audio_ID == "" || $Question == "" || $First_Answer == "" || $Second_Answer == "" || $Third_Answer == "" || $Fourth_Answer == "" || $Right_Answer == "" || $Book_ID == "") {
            echo "<span class ='error'> Please fill out all fields ! </span>";
            exit();
        }

        else{
            $query = "UPDATE `Audio` SET `Audio_ID` = '$Audio_ID', `Question` = '$Question', `Answer0` = '$First_Answer', `Answer1` = '$Second_Answer', `Answer2` = '$Third_Answer', `Answer3` = '$Fourth_Answer', `Right_Answer` = '$Right_Answer', `Book_ID` = '$Book_ID' WHERE `Audio`.`Audio_ID` = '$Audio_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }


    public function updateGrammer($Grammer_ID, $Question, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID) {
    
        $Grammer_ID = $this->fm->validation($Grammer_ID);
        $Question = $this->fm->validation($Question);
        $First_Answer = $this->fm->validation($First_Answer);
        $Second_Answer = $this->fm->validation($Second_Answer);
        $Third_Answer = $this->fm->validation($Third_Answer);
        $Fourth_Answer = $this->fm->validation($Fourth_Answer);
        $Right_Answer = $this->fm->validation($Right_Answer);
        $Book_ID = $this->fm->validation($Book_ID);
        
        $Grammer_ID = mysqli_real_escape_string($this->db->link, $Grammer_ID);
        $Question = mysqli_real_escape_string($this->db->link, $Question);
        $First_Answer = mysqli_real_escape_string($this->db->link, $First_Answer);
        $Second_Answer = mysqli_real_escape_string($this->db->link, $Second_Answer);
        $Third_Answer = mysqli_real_escape_string($this->db->link, $Third_Answer);
        $Fourth_Answer = mysqli_real_escape_string($this->db->link, $Fourth_Answer);
        $Right_Answer = mysqli_real_escape_string($this->db->link, $Right_Answer);
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);
        
        mysqli_set_charset($this->db->link, 'UTF8');
        if ($Grammer_ID == "" || $Question == "" || $First_Answer == "" || $Second_Answer == "" || $Third_Answer == "" || $Fourth_Answer == "" || $Right_Answer == "" || $Book_ID == "") {
            echo "<span class ='error'> Please fill out all fields ! </span>";
            exit();
        }

        else{
            $query = "UPDATE `Grammer` SET `Grammer_ID` = '$Grammer_ID', `Question` = '$Question', `Answer0` = '$First_Answer', `Answer1` = '$Second_Answer', `Answer2` = '$Third_Answer', `Answer3` = '$Fourth_Answer', `Right_Answer` = '$Right_Answer', `Book_ID` = '$Book_ID' WHERE `Grammer`.`Grammer_ID` = '$Grammer_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

 
    public function updateVocabulary($Vocabulary_ID, $Word, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID) {
    
        $Vocabulary_ID = $this->fm->validation($Vocabulary_ID);
        $Word = $this->fm->validation($Word);
        $First_Answer = $this->fm->validation($First_Answer);
        $Second_Answer = $this->fm->validation($Second_Answer);
        $Third_Answer = $this->fm->validation($Third_Answer);
        $Fourth_Answer = $this->fm->validation($Fourth_Answer);
        $Right_Answer = $this->fm->validation($Right_Answer);
        $Book_ID = $this->fm->validation($Book_ID);
        
        $Vocabulary_ID = mysqli_real_escape_string($this->db->link, $Vocabulary_ID);
        $Word = mysqli_real_escape_string($this->db->link, $Word);
        $First_Answer = mysqli_real_escape_string($this->db->link, $First_Answer);
        $Second_Answer = mysqli_real_escape_string($this->db->link, $Second_Answer);
        $Third_Answer = mysqli_real_escape_string($this->db->link, $Third_Answer);
        $Fourth_Answer = mysqli_real_escape_string($this->db->link, $Fourth_Answer);
        $Right_Answer = mysqli_real_escape_string($this->db->link, $Right_Answer);
        $Book_ID = mysqli_real_escape_string($this->db->link, $Book_ID);
        
        mysqli_set_charset($this->db->link, 'UTF8');
        if ($Vocabulary_ID == "" || $Word == "" || $First_Answer == "" || $Second_Answer == "" || $Third_Answer == "" || $Fourth_Answer == "" || $Right_Answer == "" || $Book_ID == "") {
            echo "<span class ='error'> Please fill out all fields ! </span>";
            exit();
        }

        else{
            $query = "UPDATE `Vocabulary` SET `Vocabulary_ID` = '$Vocabulary_ID', `Word` = '$Word', `Answer0` = '$First_Answer', `Answer1` = '$Second_Answer', `Answer2` = '$Third_Answer', `Answer3` = '$Fourth_Answer', `Right_Answer` = '$Right_Answer', `Book_ID` = '$Book_ID' WHERE `Vocabulary`.`Vocabulary_ID` = '$Vocabulary_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateUser($User_ID, $Full_Name, $Username, $Password, $Email, $Gender, $Phone_No){
    
    $User_ID = $this->fm->validation($User_ID);
    $Full_Name = $this->fm->validation($Full_Name);
    $Username = $this->fm->validation($Username);
    $Password = $this->fm->validation($Password);
    $Email = $this->fm->validation($Email);
    $Gender = $this->fm->validation($Gender);
    $Phone_No = $this->fm->validation($Phone_No);
    

    $User_ID = mysqli_real_escape_string($this->db->link, $User_ID);
    $Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);
    $Username = mysqli_real_escape_string($this->db->link, $Username);
    $Password = mysqli_real_escape_string($this->db->link, $Password);
    $Email = mysqli_real_escape_string($this->db->link, $Email);
    $Gender = mysqli_real_escape_string($this->db->link, $Gender);
    $Phone_No = mysqli_real_escape_string($this->db->link, $Phone_No);
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($User_ID == "" || $Full_Name == "" || $Username == "" || $Password == "" || $Email == "" || $Gender == "" || $Phone_No == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
            $query = "UPDATE `Users` SET `Full_Name` = '$Full_Name', `Username` = '$Username', `Password` = '$Password', `Email` = '$Email', `Gender` = '$Gender', `Phone_No` = '$Phone_No' WHERE `Users`.`User_ID` = '$User_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updateAboutData($About_ID, $Heading, $Body){
    
    $About_ID = $this->fm->validation($About_ID);
    $Heading = $this->fm->validation($Heading);
    $Body = $this->fm->validation($Body);

    $About_ID = mysqli_real_escape_string($this->db->link, $About_ID);
    $Heading = mysqli_real_escape_string($this->db->link, $Heading);
    $Body = mysqli_real_escape_string($this->db->link, $Body);
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($About_ID == "" || $Heading == "" || $Body == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
            $query = "UPDATE `About_Us` SET `Heading` = '$Heading', `Body` = '$Body'  WHERE `About_Us`.`About_ID` = '$About_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }


/*========================================================================================================================================================
Start of fucntions Uploading files such as image, video, Audio or Document to the database
==========================================================================================================================================================*/

public function upload_advertisement_image($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = rand() . '.' .$extention[1];
        $destination = './../../../Assets/img/Ads/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;

    }
}

public function upload_carousel_image($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = rand() . '.' .$extention[1];
        $destination = './../../../Assets/img/Carousel/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;

    }
}
 
public function upload_news_image($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = rand() . '.' .$extention[1];
        $destination = './../../../Assets/img/News/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;

    }
}

public function upload_research_image($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = rand() . '.' .$extention[1];
        $destination = './../../../Assets/img/Research/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;

    }
}

public function upload_reading_audio($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = $file["name"];
        $destination = './../../../Assets/Audio/Reading_Audio/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;

    }
}
public function upload_listening_audio($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = $file["name"];
        $destination = './../../../Assets/Audio/Listening_Audio/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;

    }
}
public function upload_vocabulary_audio($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = $file["name"];
        $destination = './../../../Assets/Audio/Vocabulary_Audio/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;

    }
}

public function upload_conversation_audio($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = $file["name"];
        $destination = './../../../Assets/Audio/Conversation_Audio/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;

    }
}
public function upload_audio($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = rand() . '.' .$extention[1];
        $destination = './../../../Assets/Audio/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;

    }
}

public function upload_book_image($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = rand() . '.' .$extention[1];
        $destination = './../../../Assets/img/Book/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;
        

    }
}

public function upload_user_image($file){
    if(isset($file)){
        $extention = explode('.', $file["name"]);
        $new_name = rand() . '.' .$extention[1];
        $destination = './../../../Assets/img/_Profile_Picture/'. $new_name;
        move_uploaded_file($file['tmp_name'], $destination);
        return $new_name;

        }
    }
}

?>