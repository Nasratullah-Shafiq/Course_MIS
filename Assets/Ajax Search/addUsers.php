<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_data = $crd->get_data_in_table();
            echo $get_data;
        }
    }

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if($_POST["action"] == "Insert"){
    	$Full_Name = $_POST["Full_Name"];
    	$Username = $_POST["Username"];
    	$Password = $_POST["Password"];
    	$Email = $_POST["Email"];
    	$Gender = $_POST["Gender"];
    	$Phone_No = $_POST["Phone_No"];
    	$Image = $crd->upload_file($_FILES["User_Image"]);
    	
    	$userAdd = $crd->addUsers($Full_Name, $Username, $Password, $Email, $Gender, $Phone_No, $Image);
    	}
}
?>