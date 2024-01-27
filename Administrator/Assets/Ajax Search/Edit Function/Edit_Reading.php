<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$Reading_ID = $_POST['Reading_ID'];
			$Body = $_POST['Reading_Body'];
			$Question = $_POST['Reading_Question'];
			$First_Answer = $_POST['Reading_First_Answer'];
			$Second_Answer = $_POST['Reading_Second_Answer'];
			$Third_Answer = $_POST['Reading_Third_Answer'];
			$Fourth_Answer = $_POST['Reading_Fourth_Answer'];
			$Right_Answer = $_POST['Reading_Right_Answer'];
			$Book_ID = $_POST['Reading_Book_ID'];
			
			$updtReading = $crd->updateReading($Reading_ID, $Body, $Question, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID);
		
	}
?>
