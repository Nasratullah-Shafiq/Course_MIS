<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$User_ID = $_POST['User_ID'];
			$Password = $_POST['Password'];
			
			$updtPassword = $crd->updatePassword($User_ID, $Password);
	
	}
?>
