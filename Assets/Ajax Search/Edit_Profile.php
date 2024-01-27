<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$User_ID = $_POST['User_ID'];
			$Full_Name = $_POST['Full_Name'];
			$Email = $_POST['Email'];
			$Gender = $_POST['Gender'];
			$Phone_No = $_POST['Phone_No'];
			
			$updtProfile = $crd->updateProfile($User_ID, $Full_Name, $Email, $Gender, $Phone_No);
	
	}
?>
