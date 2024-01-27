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
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["User_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Users WHERE Users.`User_ID` = '".$_POST["User_ID"]."'";

$get_user_data = $crd->Load_User_Data();
            echo $get_user_data;
            
	$select_query = "SELECT * from Users WHERE User_ID = '".$_POST["User_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$img = $row['Image'];

	unlink('./../../../Assets/img/_Profile_Picture/'.$img);
		if(mysqli_query($connect, $query)){
			echo 'User Deleted From Database';

		}
	}		
    
 }






?>

               
          