<?php
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
  
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_user_data = $crd->Load_User_Data();
            echo $get_user_data;
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
//  $Full_Name = $this->fm->validation($Full_Name);
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
//             echo "Fields must not be empty !";
//             exit();
//         }
//         else if(filter_var($Email, FILTER_VALIDATE_EMAIL) === false){
//             echo "Invalid E-mail Address!";
//             exit();
//         }
//         else{
//         $chkquery = "select * from Users where Email = '$Email'";
//         $chkresult = $this->db->select($chkquery);
//         if ($chkresult != false) {
//             echo "E-mail address already exist! Try New E-Mail";
//             exit(); 
//         }
//         $chckquery = "select * from Users where Username = '$Username'";
//         $chckresult = $this->db->select($chckquery);
//         if ($chckresult != false) {
//             echo "Username address already exist! try new one. ";
//             exit(); 
//         }
//         else{
//             $query = "insert into Users(Full_Name, Username, Password, Email, Gender, Phone_No, Image, Role_ID, Status)value('".$Full_Name."', '".$Username."', '".$Password."', '".$Email."', '".$Gender."', '".$Phone_No."', '".$File."', '2', '1')";
        
//             $inserted_row = $this->db->insert($query);
//             if($inserted_row){
//                 echo "Registration Successfully ";
                
//                 exit();
//             }
//             else{
//                 echo "Error: Not Registered";
//                 exit();
//             }
//         }
//     }               
// }
?>