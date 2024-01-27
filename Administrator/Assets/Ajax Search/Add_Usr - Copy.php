<?php

// include_once($filepath.'./../Database.php');
// include_once($filepath.'./../Format.php');

class Add_Usr{

//  private $db;
//  private $fm;
//  public function __construct(){
//    $this->db = new Database();
//    $this->fm = new Format();
//  }
    
 public $host   = "localhost";
 public $user   = "celcedua_celcedua";
 public $pass   = "change@1234";
 public $db     = "celcedua_change";
 
 
 public $link;
 public $error;
 public $crd;

 public function __construct(){
    $this->connectDB();
    $this->Add_Usr();
 }
 
public function connectDB(){
 $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db);
 if(!$this->link){
   $this->error ="Connection fail".$this->link->connect_error;
  return false;
 }
 }

// Select or Read data
public function select($query){
  $result = $this->link->query($query) or 
   die($this->link->error.__LINE__);
  if($result->num_rows > 0){
    return $result;
  } else {
    return false;
  }
 }

 public function insert($query){
 $insert_row = $this->link->query($query) or 
   die($this->link->error.__LINE__);
 if($insert_row){
   return $insert_row;
 } else {
   return false;
  }
 }
  
// Update data
 public function update($query){
 $update_row = $this->link->query($query) or 
   die($this->link->error.__LINE__);
 if($update_row){
  return $update_row;
 } else {
  return false;
  }
 }
    public function addUser($Full_Name, $Username, $Password, $Email, $Gender, $Phone_No, $File){

        // $Full_Name = $this->fm->validation($Full_Name);
        // $Username = $this->fm->validation($Username);
        // $Password = $this->fm->validation($Password);
        // $Email = $this->fm->validation($Email);
        // $Gender = $this->fm->validation($Gender);
        // $Phone_No = $this->fm->validation($Phone_No);

        $Full_Name = mysqli_real_escape_string($this->crd->link, $Full_Name);
        $Username = mysqli_real_escape_string($this->crd->link, $Username);
        $Password = mysqli_real_escape_string($this->crd->link, md5($Password));
        $Email = mysqli_real_escape_string($this->crd->link, $Email);
        $Gender = mysqli_real_escape_string($this->crd->link, $Gender);
        $Phone_No = mysqli_real_escape_string($this->crd->link, $Phone_No);

        // $Full_Name = mysqli_real_escape_string($this->crd->connectDB, $Full_Name);
        // $Username = mysqli_real_escape_string($this->crd->connectDB, $Username);
        // $Password = mysqli_real_escape_string($this->crd->connectDB, md5($Password));
        // $Email = mysqli_real_escape_string($this->crd->connectDB, $Email);
        // $Gender = mysqli_real_escape_string($this->crd->connectDB, $Gender);
        // $Phone_No = mysqli_real_escape_string($this->crd->connectDB, $Phone_No);

        // if ($Full_Name == "" || $Username == "" || $Password == "" || $Email == "" || $Gender == "" || $Phone_No == "") {
        //     echo "Fields must not be empty !";
        //     exit();
        // }
        // if(filter_var($Email, FILTER_VALIDATE_EMAIL) === false){
        //     echo "Invalid E-mail Address!";
        //     exit();
        // }
        // else{
        $chkquery = "select * from users where Email = '$Email'";
        // $chkresult = mysqli_query($crd->connectDB, $chkquery);
        $chkquery = $this->crd->select($chkquery);
        if ($chkresult != false) {
            echo "E-mail address already exist! Try New E-Mail";
            exit(); 
        }
        $chckquery = "select * from users where Username = '$Username'";
        $chckresult = $this->crd->select($chckquery);
        if ($chckresult != false) {
            echo "Username address already exist! try new one. ";
            exit(); 
        }
        else{
            $query = "insert into users(Full_Name, Username, Password, Email, Gender, Phone_No, Image, Role_ID, Status)value('".$Full_Name."', '".$Username."', '".$Password."', '".$Email."', '".$Gender."', '".$Phone_No."', '".$File."', '2', '1')";
        
            $inserted_row = $this->crd->insert($query);
            // $inserted_row = mysqli_query($crd->connectDB, $query);
            if($inserted_row){
                echo "Registration Successfully ";
                
                exit();
            }
            else{
                echo "Error: Not Registered";
                exit();
            }
        }
    // }               
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
    


  

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
      $Full_Name = $_POST["Full_Name"];
      $Username = $_POST["Username"];
      $Password = $_POST["Password"];
      $Email = $_POST["Email"];
      $Gender = $_POST["Gender"];
      $Phone_No = $_POST["Phone_No"];
        
      $File = $crd->upload_user_image($_FILES["User_Image"]);
      
      $userAdd = $crd->addUser($Full_Name, $Username, $Password, $Email, $Gender, $Phone_No, $File);

}
}

?>