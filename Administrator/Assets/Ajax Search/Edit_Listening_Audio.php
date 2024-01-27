<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$Audio_ID = $_POST['Edit_Listening_Audio_ID'];
			$Book = $_POST['Edit_Listening_Book'];
			$Unit = $_POST['Edit_Listening_Unit'];
			
			$updtListeningAudio = $crd->updateListeningAudio($Audio_ID, $Book, $Unit);
		
	}
?>
