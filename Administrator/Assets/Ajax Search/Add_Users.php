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
	
    	// $Full_Name = $_POST["Full_Name"];
    	// $Username = $_POST["Username"];
    	// $Password = $_POST["Password"];
      // $Email = $_POST["Email"];
      // $Gender = $_POST["Gender"];
      // $Phone_No = $_POST["Phone_No"];
        
    	// $File = $crd->upload_user_image($_FILES["User_Image"]);
    	
    	// $userAdd = $crd->addUser($Full_Name, $Username, $Password, $Email, $Gender, $Phone_No, $File);
    $userAdd = $crd->addUser();
}
?>