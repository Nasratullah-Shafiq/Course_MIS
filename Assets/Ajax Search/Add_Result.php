<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$Username = $_POST['Username'];
			$Full_Name = $_POST['Full_Name'];
			$Book = $_POST['Book'];
			$Subject = $_POST['Subject'];
			$TotalNumberOfQuestion = $_POST['TotalNumberOfQuestion'];
			$Attempted_Answer = $_POST['Attempted_Answer'];
			$Correct_Answer = $_POST['Correct_Answer'];
			$Wrong_Answer = $_POST['Wrong_Answer'];
			$No_Answer = $_POST['No_Answer'];
			$Result = $_POST['Result'];
			
			$addReslt = $crd->addResult($Username, $Full_Name, $Book, $Subject, $TotalNumberOfQuestion, $Attempted_Answer, $Correct_Answer, $Wrong_Answer, $No_Answer, $Result);
	
	}
?>
