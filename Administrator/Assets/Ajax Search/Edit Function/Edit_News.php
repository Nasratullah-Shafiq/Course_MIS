<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$News_ID = $_POST['News-News_ID'];
		$Heading = $_POST['News-Heading'];
		$Body = $_POST['News-Body'];
		$Source = $_POST['News-Source'];
		
		$updtNews = $crd->updateNews($News_ID, $Heading, $Body, $Source);
	
	}
?>
