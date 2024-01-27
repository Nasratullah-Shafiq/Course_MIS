<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$St_ID = $_POST['Student_St_ID'];
			$Student_ID = $_POST['Student_Student_ID'];
			$Full_Name = $_POST['Student_Full_Name'];
			$Father_Name = $_POST['Student_Father_Name'];
			$Phone_No = $_POST['Student_Phone_No'];
			$Book = $_POST['Student_Book'];
		
		$updtStudent = $crd->updateStudent($St_ID, $Student_ID, $Full_Name, $Father_Name, $Phone_No, $Book);
	
	}
?>
