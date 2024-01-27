<?php
	$filepath = realpath(dirname(__FILE__));
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_student_data = $crd->Load_Student_Data();
            echo $get_student_data;
        }
    }

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	$St_ID = $_POST["St_ID"];
    	$Full_Name = $_POST["Full_Name"];
    	$Father_Name = $_POST["Father_Name"];
        $Marks = $_POST["Marks"];
        $Grade = $_POST["Grade"];
    	$Phone_No = $_POST["Phone_No"];
    	$Book_ID = $_POST["Book_ID"];
    	
    	$studentAdd = $crd->addStudent($St_ID, $Full_Name, $Father_Name, $Marks, $Grade, $Phone_No ,$Book_ID);

}
?>