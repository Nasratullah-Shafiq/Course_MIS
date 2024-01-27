<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Audio_ID = $_POST['Audio_Audio_ID'];
		$Question = $_POST['Audio_Question'];
		$First_Answer = $_POST['Audio_First_Answer'];
		$Second_Answer = $_POST['Audio_Second_Answer'];
		$Third_Answer = $_POST['Audio_Third_Answer'];
		$Fourth_Answer = $_POST['Audio_Fourth_Answer'];
		$Right_Answer = $_POST['Audio_Right_Answer'];
		$Book_ID = $_POST['Audio_Book_ID'];
		
		$updtAudio = $crd->updateAudio($Audio_ID, $Question, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID);
	
	}
?>
