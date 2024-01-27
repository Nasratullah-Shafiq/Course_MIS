<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$User_ID = $_POST['User_User_ID'];
		$Full_Name = $_POST['User_Full_Name'];
		$Username = $_POST['User_Username'];
		$Password = $_POST['User_Password'];
		$Email = $_POST['User_Email'];
		$Gender = $_POST['User_Gender'];
		$Phone_No = $_POST['User_Phone_No'];
		
		
		$updtUser = $crd->updateUser($User_ID, $Full_Name, $Username, $Password, $Email, $Gender, $Phone_No);
	
	}
?>
