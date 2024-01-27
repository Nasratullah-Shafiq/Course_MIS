<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();
	if($_POST["action"]=='Edit_Ads'){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Ad_ID = $_POST['Advertisement_Ad_ID'];
		$Heading = $_POST['Advertisement_Heading'];
		
		
		$updtAds = $crd->updateAds($Ad_ID, $Heading);
	
	}
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Book_ID = $_POST['Book_Book_ID'];
		$Book_Name = $_POST['Book_Book_Name'];
		$Duration = $_POST['Book_Duration'];
		$Fees = $_POST['Book_Fees'];
		
		
		$updtBook = $crd->updateBook($Book_ID, $Book_Name, $Duration, $Fees);
	
	}
?>
