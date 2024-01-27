<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$Vocabulary_ID = $_POST['Vocabulary_ID'];
			$Word = $_POST['Vocabulary_Word'];
			$First_Answer = $_POST['Vocabulary_First_Answer'];
			$Second_Answer = $_POST['Vocabulary_Second_Answer'];
			$Third_Answer = $_POST['Vocabulary_Third_Answer'];
			$Fourth_Answer = $_POST['Vocabulary_Fourth_Answer'];
			$Right_Answer = $_POST['Vocabulary_Right_Answer'];
			$Book_ID = $_POST['Vocabulary_Book_ID'];
			
			$updtVocabulary = $crd->updateVocabulary($Vocabulary_ID, $Word, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID);
		
	}
?>
