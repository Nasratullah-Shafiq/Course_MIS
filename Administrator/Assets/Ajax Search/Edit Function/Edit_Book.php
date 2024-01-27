<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Book_ID = $_POST['Book_Book_ID'];
		$Book_Name = $_POST['Book_Book_Name'];
		$Duration = $_POST['Book_Duration'];
		$Fees = $_POST['Book_Fees'];
		
		
		$updtBook = $crd->updateBook($Book_ID, $Book_Name, $Duration, $Fees);
	
	}
?>
