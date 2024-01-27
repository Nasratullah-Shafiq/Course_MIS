<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Research_ID = $_POST['Research_Research_ID'];
		$Heading = $_POST['Research_Heading'];
		$Body = $_POST['Research_Body'];
		
		$updtResearch = $crd->updateResearch($Research_ID, $Heading, $Body);
	
	}
?>
