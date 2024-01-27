<?php
	
	include('./../_Partial Components/Users.php');
	include('./../_Partial Components/crudd.php');
	include('./../crud.php');
    $crd = new crud();
	// include_once('./../_Partial Components/crud.php');
	// include'./Assets/_Partial Components/crud.php';
	$usr = new Users();
 	$cord = new crudd();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_data = $cord->get_data_in_table();
            echo $get_data;
        }
    }
    if($_POST["action"] == "Insert"){
    	$full_name = mysqli_real_escape_string($crd->connect, $_POST["full_name"]);
    	$username = mysqli_real_escape_string($crd->connect, $_POST["username"]);
    	$email = mysqli_real_escape_string($crd->connect, $_POST["email"]);
    	$image = $cord->upload_file($_FILES["user_image"]);
    	$query = "
    	insert into Users
    		(Full_Name, Username, Password, Email, Language, Gender, Phone_No, Image, Role_ID, Status)
    		values('".$full_name."', '".$username."', 'Password', '".$email."', 'English', 'Male', '077898763', '".$image."', '2', '1')
    	";
    	// $inserted_row = $this->db->insert($query);
    	$crd->execute_query($query);
    	}

 	// if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// if($_POST["action"] == "Insert"){
 //    	$full_name = $_POST["full_name"];
 //    	$username = $_POST["username"];
 //    	$email = $_POST["email"];
 //    	// $same = $_POST["user_image"];
 //    	$image = $crd->upload_file($_FILES["user_image"]);
    	
 //    	$userAdd = $usr->addUsers($full_name, $username, $email, $image);
 //    	}
// }

	// if($_SERVER['REQUEST_METHOD'] == 'POST'){

	// 	$News_ID = $_POST['News_ID'];
	// 	$User_ID = $_POST['User_ID'];
	// 	$Comment = $_POST['Comment'];
		
	// 	$Commentdd = $usr->addComment($News_ID, $User_ID, $Comment);
	
	// }
?>