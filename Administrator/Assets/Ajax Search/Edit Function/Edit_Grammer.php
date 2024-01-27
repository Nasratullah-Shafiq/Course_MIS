<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Grammer_ID = $_POST['Grammer_ID'];
		$Question = $_POST['Grammer_Question'];
		$First_Answer = $_POST['Grammer_First_Answer'];
		$Second_Answer = $_POST['Grammer_Second_Answer'];
		$Third_Answer = $_POST['Grammer_Third_Answer'];
		$Fourth_Answer = $_POST['Grammer_Fourth_Answer'];
		$Right_Answer = $_POST['Grammer_Right_Answer'];
		$Book_ID = $_POST['Grammer_Book_ID'];
		
		$updtGrammer = $crd->updateGrammer($Grammer_ID, $Question, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID);
	
	}
?>
