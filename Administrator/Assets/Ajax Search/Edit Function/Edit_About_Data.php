<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$About_ID = $_POST['About_About_ID'];
		$Heading = $_POST['About_Heading'];
		$Body = $_POST['About_Body'];
		
		
		$updtAbout = $crd->updateAboutData($About_ID, $Heading, $Body);
	
	}
?>
