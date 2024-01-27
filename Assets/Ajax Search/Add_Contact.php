<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');
	$crd = new CRUD();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Full_Name = $_POST['Full_Name'];
		$Email =  $_POST['Email'];
		$Phone_No =  $_POST['Phone_No'];
		$Message =  $_POST['Message'];
		
	
		
		$contAdd = $crd->addContact($Full_Name, $Email, $Phone_No, $Message);
	
	}
?>