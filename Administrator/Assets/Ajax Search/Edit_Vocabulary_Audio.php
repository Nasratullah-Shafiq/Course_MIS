<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$Audio_ID = $_POST['Edit_Vocabulary_Audio_ID'];
			$Book = $_POST['Edit_Vocabulary_Book'];
			$Day = $_POST['Edit_Vocabulary_Day'];
			
			$updtVocabularyAudio = $crd->updateVocabularyAudio($Audio_ID, $Book, $Day);
		
	}
?>
