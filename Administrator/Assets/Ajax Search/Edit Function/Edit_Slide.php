<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Carousel_ID = $_POST['Slide_Carousel_ID'];
		$Heading = $_POST['Slide_Heading'];
		
		
		$updtSlide = $crd->updateSlide($Carousel_ID, $Heading);
	
	}
?>
